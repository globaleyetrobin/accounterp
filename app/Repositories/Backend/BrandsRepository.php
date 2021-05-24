<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Brands\BrandCreated;
use App\Events\Backend\Brands\BrandDeleted;
use App\Events\Backend\Brands\BrandUpdated;
use App\Exceptions\GeneralException;
use App\Models\Brand;
use App\Repositories\BaseRepository;

class BrandsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Brand::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
		//'short_name',
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
            ->leftjoin('users', 'users.id', '=', 'Brands.created_by')
            ->select([
                'Brands.id',
                'Brands.name',
				//'Brands.short_name',
                'Brands.status',
                'Brands.created_at',
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
            throw new GeneralException(__('exceptions.backend.Brand.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Brand = Brand::create($input)) {
            event(new BrandCreated($Brand));

            return $Brand;
        }

        throw new GeneralException(__('exceptions.backend.Brand.create_error'));
    }

    /**
     * @param \App\Models\Brand $Brand
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Brand $Brand, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Brand->id)->first()) {
            throw new GeneralException(__('exceptions.backend.Brand.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Brand->update($input)) {
            event(new BrandUpdated($Brand));

            return $Brand->fresh();
        }

        throw new GeneralException(__('exceptions.backend.Brand.update_error'));
    }

    /**
     * @param \App\Models\Brand $Brand
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Brand $Brand)
    {
        if ($Brand->delete()) {
            event(new BrandDeleted($Brand));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.Brand.delete_error'));
    }
}
