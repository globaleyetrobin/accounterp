<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Employees\EmployeeCreated;
use App\Events\Backend\Employees\EmployeeDeleted;
use App\Events\Backend\Employees\EmployeeUpdated;
use App\Exceptions\GeneralException;
use App\Models\Employee;
use App\Repositories\BaseRepository;

class EmployeesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Employee::class;

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
            ->leftjoin('users', 'users.id', '=', 'employees.created_by')
			->leftjoin('companies', 'companies.id', '=', 'employees.company_id')
            ->select([
                'employees.id',
                'employees.name',
				
				//DB::raw('employees.name'),
                'companies.name as company_name',
				'Employees.email',
				'employees.phoneno',
                'employees.status',
                'employees.created_at',
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
            throw new GeneralException(__('exceptions.backend.employee.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Employee = Employee::create($input)) {
            event(new EmployeeCreated($Employee));

            return $Employee;
        }

        throw new GeneralException(__('exceptions.backend.employee.create_error'));
    }

    /**
     * @param \App\Models\Employee $Employee
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Employee $Employee, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Employee->id)->first()) {
            throw new GeneralException(__('exceptions.backend.employee.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Employee->update($input)) {
            event(new EmployeeUpdated($Employee));

            return $Employee->fresh();
        }

        throw new GeneralException(__('exceptions.backend.employee.update_error'));
    }

    /**
     * @param \App\Models\Employee $Employee
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Employee $Employee)
    {
        if ($Employee->delete()) {
            event(new EmployeeDeleted($Employee));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.employee.delete_error'));
    }
}
