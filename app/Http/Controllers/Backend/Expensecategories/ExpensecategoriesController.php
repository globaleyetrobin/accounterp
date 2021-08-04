<?php

namespace App\Http\Controllers\Backend\Expensecategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Expensecategories\CreateExpensecategoriesRequest;
use App\Http\Requests\Backend\Expensecategories\DeleteExpensecategoriesRequest;
use App\Http\Requests\Backend\Expensecategories\ManageExpensecategoriesRequest;
use App\Http\Requests\Backend\Expensecategories\StoreExpensecategoriesRequest;
use App\Http\Requests\Backend\Expensecategories\UpdateExpensecategoriesRequest;
use App\Http\Responses\Backend\Expensecategory\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Expensecategory;
use App\Repositories\Backend\ExpensecategoriesRepository;
use Illuminate\Support\Facades\View;

class ExpensecategoriesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\ExpensecategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\ExpensecategoriesRepository $repository
     */
    public function __construct(ExpensecategoriesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['expensecategories']);
    }

    /**
     * @param \App\Http\Requests\Backend\Expensecategories\ManageExpensecategoriesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageExpensecategoriesRequest $request)
    {
		
		
        return new ViewResponse('backend.expensecategories.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Expensecategories\CreateExpensecategoriesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateExpensecategoriesRequest $request)
    {
		
	
		$catlist = Expensecategory::Expensecategoryselectlist();
		
        return new ViewResponse('backend.expensecategories.create', ['catlist' => $catlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Expensecategories\StoreExpensecategoriesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreExpensecategoriesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.expensecategories.index'), ['flash_success' => __('alerts.backend.expensecategory.created')]);
    }

    /**
     * @param \App\Models\Expensecategory $Expensecategory
     * @param \App\Http\Requests\Backend\Expensecategories\ManageExpensecategoriesRequest $request
     *
     * @return \App\Http\Responses\Backend\Expensecategory\EditResponse
     */
    public function edit(Expensecategory $Expensecategory, ManageExpensecategoriesRequest $request)
    {
		
		$catlist = Expensecategory::Expensecategoryselectlist();
		
        return new EditResponse($Expensecategory,$catlist);
    }

    /**
     * @param \App\Models\Expensecategory $Expensecategory
     * @param \App\Http\Requests\Backend\Expensecategories\UpdateExpensecategoriesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Expensecategory $Expensecategory, UpdateExpensecategoriesRequest $request)
    {
        $this->repository->update($Expensecategory, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.expensecategories.index'), ['flash_success' => __('alerts.backend.expensecategory.updated')]);
    }

    /**
     * @param \App\Models\Expensecategory $Expensecategory
     * @param \App\Http\Requests\Backend\Expensecategories\DeleteExpensecategoriesRequest $request
     *
     * @return mixed
     */
    public function destroy(Expensecategory $Expensecategory, DeleteExpensecategoriesRequest $request)
    {
        $this->repository->delete($Expensecategory);

        return new RedirectResponse(route('admin.expensecategories.index'), ['flash_success' => __('alerts.backend.expensecategory.deleted')]);
    }
}
