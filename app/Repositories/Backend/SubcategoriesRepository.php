<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Subcategories\SubcategoryCreated;
use App\Events\Backend\Subcategories\SubcategoryDeleted;
use App\Events\Backend\Subcategories\SubcategoryUpdated;
use App\Exceptions\GeneralException;
use App\Models\Subcategory;
use App\Repositories\BaseRepository;

class SubcategoriesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Subcategory::class;

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
            ->leftjoin('users', 'users.id', '=', 'categories.created_by')
            ->where('categories.parent_id', '!=', null)
            ->select([
                'categories.id',
                'categories.name',
				'categories.parent_id',
                'categories.status',
                'categories.created_at',
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
            throw new GeneralException(__('exceptions.backend.subcategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;
		
	

        if ($Subcategory = Subcategory::create($input)) {
            event(new SubcategoryCreated($Subcategory));

            return $Subcategory;
        }

        throw new GeneralException(__('exceptions.backend.subcategory.create_error'));
    }

    /**
     * @param \App\Models\Subcategory $Subcategory
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Subcategory $Subcategory, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Subcategory->id)->first()) {
            throw new GeneralException(__('exceptions.backend.subcategory.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Subcategory->update($input)) {
            event(new SubcategoryUpdated($Subcategory));

            return $Subcategory->fresh();
        }

        throw new GeneralException(__('exceptions.backend.subcategory.update_error'));
    }

    /**
     * @param \App\Models\Subcategory $Subcategory
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Subcategory $Subcategory)
    {
        if ($Subcategory->delete()) {
            event(new SubcategoryDeleted($Subcategory));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.subcategory.delete_error'));
    }
}
