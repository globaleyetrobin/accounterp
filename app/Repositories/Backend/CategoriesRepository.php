<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Categories\CategoryCreated;
use App\Events\Backend\Categories\CategoryDeleted;
use App\Events\Backend\Categories\CategoryUpdated;
use App\Exceptions\GeneralException;
use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoriesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Category::class;

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
			->where('categories.parent_id', '=', null)
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
            throw new GeneralException(__('exceptions.backend.category.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Category = Category::create($input)) {
            event(new CategoryCreated($Category));

            return $Category;
        }

        throw new GeneralException(__('exceptions.backend.category.create_error'));
    }

    /**
     * @param \App\Models\Category $Category
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Category $Category, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Category->id)->first()) {
            throw new GeneralException(__('exceptions.backend.category.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Category->update($input)) {
            event(new CategoryUpdated($Category));

            return $Category->fresh();
        }

        throw new GeneralException(__('exceptions.backend.category.update_error'));
    }

    /**
     * @param \App\Models\Category $Category
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Category $Category)
    {
        if ($Category->delete()) {
            event(new CategoryDeleted($Category));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.category.delete_error'));
    }
}
