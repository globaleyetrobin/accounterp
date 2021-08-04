<?php

namespace App\Http\Controllers\Backend\Expensecategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Expensecategories\ManageExpensecategoriesRequest;
use App\Repositories\Backend\ExpensecategoriesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Expensecategory;

/**
 * Class ExpensecategoriesTableController.
 */
class ExpensecategoriesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\ExpensecategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Expensecategories\ExpensecategoriesRepository $repository
     */
    public function __construct(ExpensecategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Expensecategories\ManageExpensecategoriesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageExpensecategoriesRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('expensecategories.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($expensecategory) {
                return $expensecategory->status_label;
            })
			  ->editColumn('parent_id', function ($expensecategory) {
				
			return $result = Expensecategory::select('name')->where('id',$expensecategory->parent_id)->value('name');
			
			//return $expensecategory;
                //return $expensecategory->created_at->toDateString();
            })
            ->editColumn('created_at', function ($expensecategory) {
				
				//return $result = Expensecategory::select('name')->where('id',5)->value('name');
                return $expensecategory->created_at->toDateString();
            })
            ->addColumn('actions', function ($expensecategory) {
                return $expensecategory->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
