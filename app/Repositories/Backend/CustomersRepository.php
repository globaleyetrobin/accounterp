<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Customers\CustomerCreated;
use App\Events\Backend\Customers\CustomerDeleted;
use App\Events\Backend\Customers\CustomerUpdated;
use App\Exceptions\GeneralException;
use App\Models\Customer;
use App\Repositories\BaseRepository;

class CustomersRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Customer::class;

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
            ->leftjoin('users', 'users.id', '=', 'customers.created_by')
			->leftjoin('companies', 'companies.id', '=', 'customers.company_id')
            ->select([
                'customers.id',
                'customers.name',
				
				//DB::raw('customers.name'),
                'companies.name as company_name',
				'Customers.email',
				'customers.phoneno',
                'customers.status',
                'customers.created_at',
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
            throw new GeneralException(__('exceptions.backend.customer.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Customer = Customer::create($input)) {
            event(new CustomerCreated($Customer));

            return $Customer;
        }

        throw new GeneralException(__('exceptions.backend.customer.create_error'));
    }

    /**
     * @param \App\Models\Customer $Customer
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Customer $Customer, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Customer->id)->first()) {
            throw new GeneralException(__('exceptions.backend.customer.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Customer->update($input)) {
            event(new CustomerUpdated($Customer));

            return $Customer->fresh();
        }

        throw new GeneralException(__('exceptions.backend.customer.update_error'));
    }

    /**
     * @param \App\Models\Customer $Customer
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Customer $Customer)
    {
        if ($Customer->delete()) {
            event(new CustomerDeleted($Customer));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.customer.delete_error'));
    }
}
