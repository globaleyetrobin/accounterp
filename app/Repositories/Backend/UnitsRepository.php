<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Units\UnitCreated;
use App\Events\Backend\Units\UnitDeleted;
use App\Events\Backend\Units\UnitUpdated;
use App\Exceptions\GeneralException;
use App\Models\Unit;
use App\Repositories\BaseRepository;

class UnitsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Unit::class;

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
            ->leftjoin('users', 'users.id', '=', 'Units.created_by')
            ->select([
                'Units.id',
                'Units.name',
				'Units.short_name',
                'Units.status',
                'Units.created_at',
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
            throw new GeneralException(__('exceptions.backend.Unit.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Unit = Unit::create($input)) {
            event(new UnitCreated($Unit));

            return $Unit;
        }

        throw new GeneralException(__('exceptions.backend.Unit.create_error'));
    }

    /**
     * @param \App\Models\Unit $Unit
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Unit $Unit, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Unit->id)->first()) {
            throw new GeneralException(__('exceptions.backend.Unit.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Unit->update($input)) {
            event(new UnitUpdated($Unit));

            return $Unit->fresh();
        }

        throw new GeneralException(__('exceptions.backend.Unit.update_error'));
    }

    /**
     * @param \App\Models\Unit $Unit
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Unit $Unit)
    {
        if ($Unit->delete()) {
            event(new UnitDeleted($Unit));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.Unit.delete_error'));
    }
}
