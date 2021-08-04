<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Accountsubcategories\AccountsubcategoryCreated;
use App\Events\Backend\Accountsubcategories\AccountsubcategoryDeleted;
use App\Events\Backend\Accountsubcategories\AccountsubcategoryUpdated;
use App\Exceptions\GeneralException;
use App\Models\Accountsubcategory;
use App\Repositories\BaseRepository;

class AccountsubcategoriesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Accountsubcategory::class;

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
            ->leftjoin('users', 'users.id', '=', 'account_subcategories.created_by')
           // ->where('account_categories.parent_id', '!=', null)
            ->select([
                'account_subcategories.id',
                'account_subcategories.name',
                'account_subcategories.account_type',
				'account_subcategories.parent_id',
                'account_subcategories.status',
                'account_subcategories.created_at',
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
            throw new GeneralException(__('exceptions.backend.accountsubcategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;
		
	

        if ($Accountsubcategory = Accountsubcategory::create($input)) {
            event(new AccountsubcategoryCreated($Accountsubcategory));

            return $Accountsubcategory;
        }

        throw new GeneralException(__('exceptions.backend.accountsubcategory.create_error'));
    }

    /**
     * @param \App\Models\Accountsubcategory $Accountsubcategory
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Accountsubcategory $Accountsubcategory, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Accountsubcategory->id)->first()) {
            throw new GeneralException(__('exceptions.backend.accountsubcategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Accountsubcategory->update($input)) {
            event(new AccountsubcategoryUpdated($Accountsubcategory));

            return $Accountsubcategory->fresh();
        }

        throw new GeneralException(__('exceptions.backend.accountsubcategory.update_error'));
    }

    /**
     * @param \App\Models\Accountsubcategory $Accountsubcategory
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Accountsubcategory $Accountsubcategory)
    {
        if ($Accountsubcategory->delete()) {
            event(new AccountsubcategoryDeleted($Accountsubcategory));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.accountsubcategory.delete_error'));
    }
}
