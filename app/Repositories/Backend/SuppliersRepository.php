<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Suppliers\SupplierCreated;
use App\Events\Backend\Suppliers\SupplierDeleted;
use App\Events\Backend\Suppliers\SupplierUpdated;
use App\Exceptions\GeneralException;
use App\Models\Supplier;
use App\Repositories\BaseRepository;

class SuppliersRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Supplier::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
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
            ->leftjoin('users', 'users.id', '=', 'suppliers.created_by')
			->leftjoin('companies', 'companies.id', '=', 'suppliers.company_id')
            ->select([
                'suppliers.id',
                'suppliers.name',
				
				//DB::raw('suppliers.name'),
                'companies.name as company_name',
				'Suppliers.email',
				'suppliers.phoneno',
                'suppliers.status',
                'suppliers.created_at',
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
            throw new GeneralException(__('exceptions.backend.supplier.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Supplier = Supplier::create($input)) {
            event(new SupplierCreated($Supplier));

            return $Supplier;
        }

        throw new GeneralException(__('exceptions.backend.supplier.create_error'));
    }

    /**
     * @param \App\Models\Supplier $Supplier
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Supplier $Supplier, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Supplier->id)->first()) {
            throw new GeneralException(__('exceptions.backend.supplier.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Supplier->update($input)) {
            event(new SupplierUpdated($Supplier));

            return $Supplier->fresh();
        }

        throw new GeneralException(__('exceptions.backend.supplier.update_error'));
    }

    /**
     * @param \App\Models\Supplier $Supplier
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Supplier $Supplier)
    {
        if ($Supplier->delete()) {
            event(new SupplierDeleted($Supplier));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.supplier.delete_error'));
    }
}
