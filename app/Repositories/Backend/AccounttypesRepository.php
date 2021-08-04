<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Accounttypes\AccounttypeCreated;
use App\Events\Backend\Accounttypes\AccounttypeDeleted;
use App\Events\Backend\Accounttypes\AccounttypeUpdated;
use App\Exceptions\GeneralException;
use App\Models\Accounttype;
use App\Repositories\BaseRepository;

class AccounttypesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Accounttype::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
		'parent_id',
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
            ->leftjoin('users', 'users.id', '=', 'accounttypes.created_by')
			->where('accounttypes.parent_id', '=', null)
            ->select([
                'accounttypes.id',
                'accounttypes.name',
				'accounttypes.parent_id',
                'accounttypes.status',
                'accounttypes.created_at',
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
            throw new GeneralException(__('exceptions.backend.accounttype.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Accounttype = Accounttype::create($input)) {
            event(new AccounttypeCreated($Accounttype));

            return $Accounttype;
        }

        throw new GeneralException(__('exceptions.backend.accounttype.create_error'));
    }

    /**
     * @param \App\Models\Accounttype $Accounttype
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Accounttype $Accounttype, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Accounttype->id)->first()) {
            throw new GeneralException(__('exceptions.backend.accounttype.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Accounttype->update($input)) {
            event(new AccounttypeUpdated($Accounttype));

            return $Accounttype->fresh();
        }

        throw new GeneralException(__('exceptions.backend.accounttype.update_error'));
    }

    /**
     * @param \App\Models\Accounttype $Accounttype
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Accounttype $Accounttype)
    {
        if ($Accounttype->delete()) {
            event(new AccounttypeDeleted($Accounttype));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.accounttype.delete_error'));
    }
}
