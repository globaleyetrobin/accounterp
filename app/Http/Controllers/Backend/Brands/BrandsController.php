<?php

namespace App\Http\Controllers\Backend\Brands;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Brands\CreateBrandsRequest;
use App\Http\Requests\Backend\Brands\DeleteBrandsRequest;
use App\Http\Requests\Backend\Brands\ManageBrandsRequest;
use App\Http\Requests\Backend\Brands\StoreBrandsRequest;
use App\Http\Requests\Backend\Brands\UpdateBrandsRequest;
use App\Http\Responses\Backend\Brands\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Brand;
use App\Repositories\Backend\BrandsRepository;
use Illuminate\Support\Facades\View;

class BrandsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\BrandsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\BrandsRepository $repository
     */
    public function __construct(BrandsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['brands']);
    }

    /**
     * @param \App\Http\Requests\Backend\Brands\ManageBrandsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageBrandsRequest $request)
    {
		
		
        return new ViewResponse('backend.brands.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Brands\CreateBrandsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateBrandsRequest $request)
    {
		;
        return new ViewResponse('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Brands\StoreBrandsRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreBrandsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.brands.index'), ['flash_success' => __('alerts.backend.brand.created')]);
    }

    /**
     * @param \App\Models\brand $Brand
     * @param \App\Http\Requests\Backend\Brands\ManageBrandsRequest $request
     *
     * @return \App\Http\Responses\Backend\brand\EditResponse
     */
    public function edit(Brand $Brand, ManageBrandsRequest $request)
    {
		
	
		
        return new EditResponse($Brand);
    }

    /**
     * @param \App\Models\brand $Brand
     * @param \App\Http\Requests\Backend\Brands\UpdateBrandsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Brand $Brand, UpdateBrandsRequest $request)
    {
        $this->repository->update($Brand, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.brands.index'), ['flash_success' => __('alerts.backend.brand.updated')]);
    }

    /**
     * @param \App\Models\brand $Brand
     * @param \App\Http\Requests\Backend\Brands\DeleteBrandsRequest $request
     *
     * @return mixed
     */
    public function destroy(Brand $Brand, DeleteBrandsRequest $request)
    {
        $this->repository->delete($Brand);

        return new RedirectResponse(route('admin.brands.index'), ['flash_success' => __('alerts.backend.brand.deleted')]);
    }
}
