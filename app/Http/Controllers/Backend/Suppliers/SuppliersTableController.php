<?php

namespace App\Http\Controllers\Backend\Suppliers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Suppliers\ManageSuppliersRequest;
use App\Repositories\Backend\SuppliersRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class SuppliersTableController.
 */
class SuppliersTableController extends Controller
{
	
	 
	
    /**
     * @var \App\Repositories\Backend\SuppliersRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Suppliers\SuppliersRepository $repository
     */
    public function __construct(SuppliersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Suppliers\ManageSuppliersRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSuppliersRequest $request)
    {
		
		
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('suppliers.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($Suppliers) {
                return $Suppliers->status_label;
            })
            
            ->addColumn('actions', function ($Suppliers) {
                return $Suppliers->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
