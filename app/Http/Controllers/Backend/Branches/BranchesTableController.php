<?php

namespace App\Http\Controllers\Backend\Branches;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Branches\ManageBranchesRequest;
use App\Repositories\Backend\BranchesRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class BranchesTableController.
 */
class BranchesTableController extends Controller
{
	
	 
	
    /**
     * @var \App\Repositories\Backend\BranchesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Branches\BranchesRepository $repository
     */
    public function __construct(BranchesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Branches\ManageBranchesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBranchesRequest $request)
    {
		
		
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('Branches.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($Branches) {
                return $Branches->status_label;
            })
            
            ->addColumn('actions', function ($Branches) {
                return $Branches->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
