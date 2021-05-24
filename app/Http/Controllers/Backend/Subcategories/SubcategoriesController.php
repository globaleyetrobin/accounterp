<?php

namespace App\Http\Controllers\Backend\Subcategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Subcategories\CreateSubcategoriesRequest;
use App\Http\Requests\Backend\Subcategories\DeleteSubcategoriesRequest;
use App\Http\Requests\Backend\Subcategories\ManageSubcategoriesRequest;
use App\Http\Requests\Backend\Subcategories\StoreSubcategoriesRequest;
use App\Http\Requests\Backend\Subcategories\UpdateSubcategoriesRequest;
use App\Http\Responses\Backend\Subcategory\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Subcategory;
use App\Repositories\Backend\SubcategoriesRepository;
use Illuminate\Support\Facades\View;

class SubcategoriesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\SubcategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\SubcategoriesRepository $repository
     */
    public function __construct(SubcategoriesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['subcategories']);
    }

    /**
     * @param \App\Http\Requests\Backend\Subcategories\ManageSubcategoriesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageSubcategoriesRequest $request)
    {
		
		
        return new ViewResponse('backend.subcategories.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Subcategories\CreateSubcategoriesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateSubcategoriesRequest $request)
    {
		
	
		$catlist = Subcategory::Subcategoryselectlist();
		
        return new ViewResponse('backend.subcategories.create', ['catlist' => $catlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Subcategories\StoreSubcategoriesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreSubcategoriesRequest $request)
    {
		
		
        $this->repository->create($request->except(['_token', '_method']));
		
		

        return new RedirectResponse(route('admin.subcategories.index'), ['flash_success' => __('alerts.backend.subcategory.created')]);
    }

    /**
     * @param \App\Models\Subcategory $Subcategory
     * @param \App\Http\Requests\Backend\Subcategories\ManageSubcategoriesRequest $request
     *
     * @return \App\Http\Responses\Backend\Subcategory\EditResponse
     */
    public function edit(Subcategory $Subcategory, ManageSubcategoriesRequest $request)
    {
		
		$catlist = Subcategory::Subcategoryselectlist();

     
		
        return new EditResponse($Subcategory,$catlist);
    }

    /**
     * @param \App\Models\Subcategory $Subcategory
     * @param \App\Http\Requests\Backend\Subcategories\UpdateSubcategoriesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Subcategory $Subcategory, UpdateSubcategoriesRequest $request)
    {
        $this->repository->update($Subcategory, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.subcategories.index'), ['flash_success' => __('alerts.backend.subcategory.updated')]);
    }

    /**
     * @param \App\Models\Subcategory $Subcategory
     * @param \App\Http\Requests\Backend\Subcategories\DeleteSubcategoriesRequest $request
     *
     * @return mixed
     */
    public function destroy(Subcategory $Subcategory, DeleteSubcategoriesRequest $request)
    {
        $this->repository->delete($Subcategory);

        return new RedirectResponse(route('admin.subcategories.index'), ['flash_success' => __('alerts.backend.subcategory.deleted')]);
    }
}
