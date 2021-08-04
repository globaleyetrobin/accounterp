<?php

namespace App\Http\Controllers\Backend\Expenses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Expenses\ManageExpensesRequest;
use App\Repositories\Backend\ExpensesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Expense;

use App\Models\Expensecategory;
/**
 * Class ExpensesTableController.
 */
class ExpensesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\ExpensesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Expenses\ExpensesRepository $repository
     */
    public function __construct(ExpensesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Expenses\ManageExpensesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageExpensesRequest $request)
    {
         return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('Expenses.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($category) {
                return $category->amount;
            })
        

        ->editColumn('created_by', function ($category) {
                
                return $result = Expensecategory::select('name')->where('id',$category->parent_id)->value('name');
               // return $category->date;
            })
            ->editColumn('created_at', function ($category) {
                
                //return $result = Category::select('name')->where('id',5)->value('name');
                return $category->date;
            })
            ->addColumn('actions', function ($category) {
                return $category->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
