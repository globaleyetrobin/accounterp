<?php

namespace App\Http\Controllers\Backend\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Employees\ManageEmployeesRequest;
use App\Repositories\Backend\EmployeesRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class EmployeesTableController.
 */
class EmployeesTableController extends Controller
{
	
	 
	
    /**
     * @var \App\Repositories\Backend\EmployeesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Employees\EmployeesRepository $repository
     */
    public function __construct(EmployeesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Employees\ManageEmployeesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageEmployeesRequest $request)
    {
		
		
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('employees.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($Employees) {
                return $Employees->status_label;
            })
            
            ->addColumn('actions', function ($Employees) {
                return $Employees->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
