<?php

namespace App\Http\Controllers\Backend\Companies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Companies\ManageCompaniesRequest;
use App\Repositories\Backend\CompaniesRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class CompaniesTableController.
 */
class CompaniesTableController extends Controller
{
	
	 
	
    /**
     * @var \App\Repositories\Backend\CompaniesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Companies\CompaniesRepository $repository
     */
    public function __construct(CompaniesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Companies\ManageCompaniesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCompaniesRequest $request)
    {
		
		
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('companies.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($companies) {
                return $companies->status_label;
            })
            
            ->addColumn('actions', function ($companies) {
                return $companies->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
