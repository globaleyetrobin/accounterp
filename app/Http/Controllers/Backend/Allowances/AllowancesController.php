<?php

namespace App\Http\Controllers\Backend\Allowances;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Allowances\CreateAllowancesRequest;
use App\Http\Requests\Backend\Allowances\DeleteAllowancesRequest;
use App\Http\Requests\Backend\Allowances\ManageAllowancesRequest;
use App\Http\Requests\Backend\Allowances\StoreAllowancesRequest;
use App\Http\Requests\Backend\Allowances\UpdateAllowancesRequest;
use App\Http\Responses\Backend\Allowances\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Allowance;
use App\Repositories\Backend\AllowancesRepository;
use Illuminate\Support\Facades\View;

class AllowancesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AllowancesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\AllowancesRepository $repository
     */
    public function __construct(AllowancesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['allowances']);
    }

    /**
     * @param \App\Http\Requests\Backend\Allowances\ManageAllowancesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageAllowancesRequest $request)
    {
		
		
        return new ViewResponse('backend.allowances.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Allowances\CreateAllowancesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateAllowancesRequest $request)
    {
		;
        return new ViewResponse('backend.allowances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Allowances\StoreAllowancesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreAllowancesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.allowances.index'), ['flash_success' => __('alerts.backend.allowance.created')]);
    }

    /**
     * @param \App\Models\allowance $Allowance
     * @param \App\Http\Requests\Backend\Allowances\ManageAllowancesRequest $request
     *
     * @return \App\Http\Responses\Backend\allowance\EditResponse
     */
    public function edit(Allowance $Allowance, ManageAllowancesRequest $request)
    {
		
	
		
        return new EditResponse($Allowance);
    }

    /**
     * @param \App\Models\allowance $Allowance
     * @param \App\Http\Requests\Backend\Allowances\UpdateAllowancesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Allowance $Allowance, UpdateAllowancesRequest $request)
    {
        $this->repository->update($Allowance, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.allowances.index'), ['flash_success' => __('alerts.backend.allowance.updated')]);
    }

    /**
     * @param \App\Models\allowance $Allowance
     * @param \App\Http\Requests\Backend\Allowances\DeleteAllowancesRequest $request
     *
     * @return mixed
     */
    public function destroy(Allowance $Allowance, DeleteAllowancesRequest $request)
    {
        $this->repository->delete($Allowance);

        return new RedirectResponse(route('admin.allowances.index'), ['flash_success' => __('alerts.backend.allowance.deleted')]);
    }
}
