<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Accountcategories\AccountcategoryCreated;
use App\Events\Backend\Accountcategories\AccountcategoryDeleted;
use App\Events\Backend\Accountcategories\AccountcategoryUpdated;
use App\Exceptions\GeneralException;
use App\Models\Accountcategory;
use App\Repositories\BaseRepository;

class AccountcategoriesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Accountcategory::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
        'account_type',
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
            ->leftjoin('users', 'users.id', '=', 'account_categories.created_by')
            ->where('account_categories.parent_id', '!=', null)
            ->select([
                'account_categories.id',
                'account_categories.name',
                'account_categories.account_type',
				'account_categories.parent_id',
                'account_categories.status',
                'account_categories.created_at',
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
            throw new GeneralException(__('exceptions.backend.accountcategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;
		
	

        if ($Accountcategory = Accountcategory::create($input)) {
            event(new AccountcategoryCreated($Accountcategory));

            return $Accountcategory;
        }

        throw new GeneralException(__('exceptions.backend.accountcategory.create_error'));
    }

    /**
     * @param \App\Models\Accountcategory $Accountcategory
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Accountcategory $Accountcategory, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Accountcategory->id)->first()) {
            throw new GeneralException(__('exceptions.backend.accountcategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Accountcategory->update($input)) {
            event(new AccountcategoryUpdated($Accountcategory));

            return $Accountcategory->fresh();
        }

        throw new GeneralException(__('exceptions.backend.accountcategory.update_error'));
    }

    /**
     * @param \App\Models\Accountcategory $Accountcategory
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Accountcategory $Accountcategory)
    {
        if ($Accountcategory->delete()) {
            event(new AccountcategoryDeleted($Accountcategory));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.accountcategory.delete_error'));
    }
}
