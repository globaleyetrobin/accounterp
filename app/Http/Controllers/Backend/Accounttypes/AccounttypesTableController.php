<?php

namespace App\Http\Controllers\Backend\Accounttypes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Accounttypes\ManageAccounttypesRequest;
use App\Repositories\Backend\AccounttypesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Accounttype;

/**
 * Class AccounttypesTableController.
 */
class AccounttypesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AccounttypesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Accounttypes\AccounttypesRepository $repository
     */
    public function __construct(AccounttypesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Accounttypes\ManageAccounttypesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAccounttypesRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('accounttypes.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($accounttype) {
                return $accounttype->status_label;
            })
			  ->editColumn('parent_id', function ($accounttype) {
				
			return $result = Accounttype::select('name')->where('id',$accounttype->parent_id)->value('name');
			
			//return $accounttype;
                //return $accounttype->created_at->toDateString();
            })
            ->editColumn('created_at', function ($accounttype) {
				
				//return $result = Accounttype::select('name')->where('id',5)->value('name');
                return $accounttype->created_at->toDateString();
            })
            ->addColumn('actions', function ($accounttype) {
                return $accounttype->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
