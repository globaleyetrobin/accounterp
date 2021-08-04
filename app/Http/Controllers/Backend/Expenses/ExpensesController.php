<?php

namespace App\Http\Controllers\Backend\Expenses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Expenses\CreateExpensesRequest;
use App\Http\Requests\Backend\Expenses\DeleteExpensesRequest;
use App\Http\Requests\Backend\Expenses\ManageExpensesRequest;
use App\Http\Requests\Backend\Expenses\StoreExpensesRequest;
use App\Http\Requests\Backend\Expenses\UpdateExpensesRequest;
use App\Http\Responses\Backend\Expense\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Expense;
use App\Repositories\Backend\ExpensesRepository;
use Illuminate\Support\Facades\View;

class ExpensesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\ExpensesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\ExpensesRepository $repository
     */
    public function __construct(ExpensesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['expenses']);
    }

    /**
     * @param \App\Http\Requests\Backend\Expenses\ManageExpensesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageExpensesRequest $request)
    {
		
		
        return new ViewResponse('backend.expenses.index');
    }
	
	    public function ledger(ManageExpensesRequest $request)
    {
		
		echo "Test";
		exit;
        return new ViewResponse('backend.expenses.ledger');
    }


    /**
     * @param \App\Http\Requests\Backend\Expenses\CreateExpensesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateExpensesRequest $request)
    {
		
	
		$catlist = Expense::Expenseselectlist();

        return new ViewResponse('backend.expenses.create', ['catlist' => $catlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Expenses\StoreExpensesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreExpensesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.expenses.index'), ['flash_success' => __('alerts.backend.blog-expense.created')]);
    }

    /**
     * @param \App\Models\Expense $Expense
     * @param \App\Http\Requests\Backend\Expenses\ManageExpensesRequest $request
     *
     * @return \App\Http\Responses\Backend\Expense\EditResponse
     */
    public function edit(Expense $Expense, ManageExpensesRequest $request)
    {
		
		//$catlist = Expense::Expenseselectlist();

        $catlist = Expense::Expenseselectlist();

		
        return new EditResponse($Expense,$catlist);
    }

    /**
     * @param \App\Models\Expense $Expense
     * @param \App\Http\Requests\Backend\Expenses\UpdateExpensesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Expense $Expense, UpdateExpensesRequest $request)
    {
        $this->repository->update($Expense, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.expenses.index'), ['flash_success' => __('alerts.backend.blog-expense.updated')]);
    }

    /**
     * @param \App\Models\Expense $Expense
     * @param \App\Http\Requests\Backend\Expenses\DeleteExpensesRequest $request
     *
     * @return mixed
     */
    public function destroy(Expense $Expense, DeleteExpensesRequest $request)
    {
        $this->repository->delete($Expense);

        return new RedirectResponse(route('admin.expenses.index'), ['flash_success' => __('alerts.backend.blog-expense.deleted')]);
    }
}
