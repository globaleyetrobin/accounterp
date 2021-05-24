<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Deductions\DeductionCreated;
use App\Events\Backend\Deductions\DeductionDeleted;
use App\Events\Backend\Deductions\DeductionUpdated;
use App\Exceptions\GeneralException;
use App\Models\Deduction;
use App\Repositories\BaseRepository;

class DeductionsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Deduction::class;

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
            ->leftjoin('users', 'users.id', '=', 'Deductions.created_by')
            ->select([
                'Deductions.id',
                'Deductions.name',
				'Deductions.short_name',
                'Deductions.status',
                'Deductions.created_at',
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
            throw new GeneralException(__('exceptions.backend.Deduction.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Deduction = Deduction::create($input)) {
            event(new DeductionCreated($Deduction));

            return $Deduction;
        }

        throw new GeneralException(__('exceptions.backend.Deduction.create_error'));
    }

    /**
     * @param \App\Models\Deduction $Deduction
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Deduction $Deduction, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Deduction->id)->first()) {
            throw new GeneralException(__('exceptions.backend.Deduction.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Deduction->update($input)) {
            event(new DeductionUpdated($Deduction));

            return $Deduction->fresh();
        }

        throw new GeneralException(__('exceptions.backend.Deduction.update_error'));
    }

    /**
     * @param \App\Models\Deduction $Deduction
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Deduction $Deduction)
    {
        if ($Deduction->delete()) {
            event(new DeductionDeleted($Deduction));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.Deduction.delete_error'));
    }
}
