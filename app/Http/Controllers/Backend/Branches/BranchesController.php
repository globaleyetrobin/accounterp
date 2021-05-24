<?php
namespace App\Http\Controllers\Backend\Branches;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Branches\CreateBranchesRequest;
use App\Http\Requests\Backend\Branches\DeleteBranchesRequest;
use App\Http\Requests\Backend\Branches\ManageBranchesRequest;
use App\Http\Requests\Backend\Branches\StoreBranchesRequest;
use App\Http\Requests\Backend\Branches\UpdateBranchesRequest;
use App\Http\Responses\Backend\Branches\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Branch;

use App\Models\Company;


use App\Repositories\Backend\BranchesRepository;
use Illuminate\Support\Facades\View;

class BranchesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\BranchesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\BranchesRepository $repository
     */
    public function __construct(BranchesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['Branches']);
    }

    /**
     * @param \App\Http\Requests\Backend\Branches\ManageBranchesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageBranchesRequest $request)
    {
		
        return new ViewResponse('backend.Branches.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Branches\CreateBranchesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateBranchesRequest $request)
    {
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
		
		
        return new ViewResponse('backend.Branches.create' , ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Branches\StoreBranchesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreBranchesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.branches.index'), ['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    /**
     * @param \App\Models\Branch $Branch
     * @param \App\Http\Requests\Backend\Branches\ManageBranchesRequest $request
     *
     * @return \App\Http\Responses\Backend\Branch\EditResponse
     */
    public function edit(Branch $Branch, ManageBranchesRequest $request)
    {
		
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
        return new EditResponse($Branch,$companies);
    }

    /**
     * @param \App\Models\Branch $Branch
     * @param \App\Http\Requests\Backend\Branches\UpdateBranchesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Branch $Branch, UpdateBranchesRequest $request)
    {
        $this->repository->update($Branch, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.branches.index'), ['flash_success' => __('alerts.backend.blog-category.updated')]);
    }

    /**
     * @param \App\Models\Branch $Branch
     * @param \App\Http\Requests\Backend\Branches\DeleteBranchesRequest $request
     *
     * @return mixed
     */
    public function destroy(Branch $Branch, DeleteBranchesRequest $request)
    {
        $this->repository->delete($Branch);

        return new RedirectResponse(route('admin.branches.index'), ['flash_success' => __('alerts.backend.blog-category.deleted')]);
    }
}
