<?php

namespace App\Http\Controllers\Backend\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Customers\ManageCustomersRequest;
use App\Repositories\Backend\CustomersRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class CustomersTableController.
 */
class CustomersTableController extends Controller
{
	
	 
	
    /**
     * @var \App\Repositories\Backend\CustomersRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Customers\CustomersRepository $repository
     */
    public function __construct(CustomersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Customers\ManageCustomersRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCustomersRequest $request)
    {
		
		
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('customers.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($Customers) {
                return $Customers->status_label;
            })
            
            ->addColumn('actions', function ($Customers) {
                return $Customers->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
