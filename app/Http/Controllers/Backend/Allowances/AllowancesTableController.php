<?php

namespace App\Http\Controllers\Backend\Allowances;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Allowances\ManageAllowancesRequest;
use App\Repositories\Backend\AllowancesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Allowance;

/**
 * Class AllowancesTableController.
 */
class AllowancesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AllowancesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Allowances\AllowancesRepository $repository
     */
    public function __construct(AllowancesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Allowances\ManageAllowancesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAllowancesRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('Allowances.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($category) {
                return $category->status_label;
            })
		
            ->editColumn('created_at', function ($category) {
				
				//return $result = Category::select('name')->where('id',5)->value('name');
                return $category->created_at->toDateString();
            })
            ->addColumn('actions', function ($category) {
                return $category->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
