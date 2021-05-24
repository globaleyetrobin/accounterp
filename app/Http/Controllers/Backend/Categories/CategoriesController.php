<?php

namespace App\Http\Controllers\Backend\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Categories\CreateCategoriesRequest;
use App\Http\Requests\Backend\Categories\DeleteCategoriesRequest;
use App\Http\Requests\Backend\Categories\ManageCategoriesRequest;
use App\Http\Requests\Backend\Categories\StoreCategoriesRequest;
use App\Http\Requests\Backend\Categories\UpdateCategoriesRequest;
use App\Http\Responses\Backend\Category\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Category;
use App\Repositories\Backend\CategoriesRepository;
use Illuminate\Support\Facades\View;

class CategoriesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\CategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\CategoriesRepository $repository
     */
    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['categories']);
    }

    /**
     * @param \App\Http\Requests\Backend\Categories\ManageCategoriesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageCategoriesRequest $request)
    {
		
		
        return new ViewResponse('backend.categories.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Categories\CreateCategoriesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateCategoriesRequest $request)
    {
		
	
		$catlist = Category::Categoryselectlist();
		
        return new ViewResponse('backend.categories.create', ['catlist' => $catlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Categories\StoreCategoriesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreCategoriesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.categories.index'), ['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    /**
     * @param \App\Models\Category $Category
     * @param \App\Http\Requests\Backend\Categories\ManageCategoriesRequest $request
     *
     * @return \App\Http\Responses\Backend\Category\EditResponse
     */
    public function edit(Category $Category, ManageCategoriesRequest $request)
    {
		
		$catlist = Category::Categoryselectlist();
		
        return new EditResponse($Category,$catlist);
    }

    /**
     * @param \App\Models\Category $Category
     * @param \App\Http\Requests\Backend\Categories\UpdateCategoriesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Category $Category, UpdateCategoriesRequest $request)
    {
        $this->repository->update($Category, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.categories.index'), ['flash_success' => __('alerts.backend.blog-category.updated')]);
    }

    /**
     * @param \App\Models\Category $Category
     * @param \App\Http\Requests\Backend\Categories\DeleteCategoriesRequest $request
     *
     * @return mixed
     */
    public function destroy(Category $Category, DeleteCategoriesRequest $request)
    {
        $this->repository->delete($Category);

        return new RedirectResponse(route('admin.categories.index'), ['flash_success' => __('alerts.backend.blog-category.deleted')]);
    }
}
