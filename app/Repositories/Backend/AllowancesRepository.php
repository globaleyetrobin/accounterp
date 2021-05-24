<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Allowances\AllowanceCreated;
use App\Events\Backend\Allowances\AllowanceDeleted;
use App\Events\Backend\Allowances\AllowanceUpdated;
use App\Exceptions\GeneralException;
use App\Models\Allowance;
use App\Repositories\BaseRepository;

class AllowancesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Allowance::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
		'short_name',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Retrieve List.
     *
     * @var array
     * @return Collection
     */
    public function retrieveList(array $options = [])
    {
        $perPage = isset($options['per_page']) ? (int) $options['per_page'] : 20;
        $orderBy = isset($options['order_by']) && in_array($options['order_by'], $this->sortable) ? $options['order_by'] : 'created_at';
        $order = isset($options['order']) && in_array($options['order'], ['asc', 'desc']) ? $options['order'] : 'desc';
        $query = $this->query()
            ->with([
                'creator',
                'updater',
            ])
            ->orderBy($orderBy, $order);

        if ($perPage == -1) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'Allowances.created_by')
            ->select([
                'Allowances.id',
                'Allowances.name',
				'Allowances.short_name',
                'Allowances.status',
                'Allowances.created_at',
                'users.first_name as created_by',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        if ($this->query()->where('name', $input['name'])->first()) {
            throw new GeneralException(__('exceptions.backend.Allowance.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Allowance = Allowance::create($input)) {
            event(new AllowanceCreated($Allowance));

            return $Allowance;
        }

        throw new GeneralException(__('exceptions.backend.Allowance.create_error'));
    }

    /**
     * @param \App\Models\Allowance $Allowance
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Allowance $Allowance, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Allowance->id)->first()) {
            throw new GeneralException(__('exceptions.backend.Allowance.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Allowance->update($input)) {
            event(new AllowanceUpdated($Allowance));

            return $Allowance->fresh();
        }

        throw new GeneralException(__('exceptions.backend.Allowance.update_error'));
    }

    /**
     * @param \App\Models\Allowance $Allowance
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Allowance $Allowance)
    {
        if ($Allowance->delete()) {
            event(new AllowanceDeleted($Allowance));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.Allowance.delete_error'));
    }
}
