<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Expensecategories\ExpensecategoryCreated;
use App\Events\Backend\Expensecategories\ExpensecategoryDeleted;
use App\Events\Backend\Expensecategories\ExpensecategoryUpdated;
use App\Exceptions\GeneralException;
use App\Models\Expensecategory;
use App\Repositories\BaseRepository;

class ExpensecategoriesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Expensecategory::class;

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
            ->leftjoin('users', 'users.id', '=', 'expensecategories.created_by')
			->where('expensecategories.parent_id', '=', null)
            ->select([
                'expensecategories.id',
                'expensecategories.name',
				'expensecategories.parent_id',
                'expensecategories.status',
                'expensecategories.created_at',
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
            throw new GeneralException(__('exceptions.backend.expensecategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Expensecategory = Expensecategory::create($input)) {
            event(new ExpensecategoryCreated($Expensecategory));

            return $Expensecategory;
        }

        throw new GeneralException(__('exceptions.backend.expensecategory.create_error'));
    }

    /**
     * @param \App\Models\Expensecategory $Expensecategory
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Expensecategory $Expensecategory, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Expensecategory->id)->first()) {
            throw new GeneralException(__('exceptions.backend.expensecategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Expensecategory->update($input)) {
            event(new ExpensecategoryUpdated($Expensecategory));

            return $Expensecategory->fresh();
        }

        throw new GeneralException(__('exceptions.backend.expensecategory.update_error'));
    }

    /**
     * @param \App\Models\Expensecategory $Expensecategory
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Expensecategory $Expensecategory)
    {
        if ($Expensecategory->delete()) {
            event(new ExpensecategoryDeleted($Expensecategory));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.expensecategory.delete_error'));
    }
}
