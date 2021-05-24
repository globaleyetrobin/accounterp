<?php

namespace App\Http\Controllers\Backend\Units;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Units\CreateUnitsRequest;
use App\Http\Requests\Backend\Units\DeleteUnitsRequest;
use App\Http\Requests\Backend\Units\ManageUnitsRequest;
use App\Http\Requests\Backend\Units\StoreUnitsRequest;
use App\Http\Requests\Backend\Units\UpdateUnitsRequest;
use App\Http\Responses\Backend\Units\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Unit;
use App\Repositories\Backend\UnitsRepository;
use Illuminate\Support\Facades\View;

class UnitsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\UnitsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\UnitsRepository $repository
     */
    public function __construct(UnitsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['Units']);
    }

    /**
     * @param \App\Http\Requests\Backend\Units\ManageUnitsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageUnitsRequest $request)
    {
		
		
        return new ViewResponse('backend.units.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Units\CreateUnitsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateUnitsRequest $request)
    {
		;
        return new ViewResponse('backend.units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Units\StoreUnitsRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreUnitsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.units.index'), ['flash_success' => __('alerts.backend.brand.created')]);
    }

    /**
     * @param \App\Models\brand $Unit
     * @param \App\Http\Requests\Backend\Units\ManageUnitsRequest $request
     *
     * @return \App\Http\Responses\Backend\brand\EditResponse
     */
    public function edit(Unit $Unit, ManageUnitsRequest $request)
    {
		
	
		
        return new EditResponse($Unit);
    }

    /**
     * @param \App\Models\brand $Unit
     * @param \App\Http\Requests\Backend\Units\UpdateUnitsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Unit $Unit, UpdateUnitsRequest $request)
    {
        $this->repository->update($Unit, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.units.index'), ['flash_success' => __('alerts.backend.brand.updated')]);
    }

    /**
     * @param \App\Models\brand $Unit
     * @param \App\Http\Requests\Backend\Units\DeleteUnitsRequest $request
     *
     * @return mixed
     */
    public function destroy(Unit $Unit, DeleteUnitsRequest $request)
    {
        $this->repository->delete($Unit);

        return new RedirectResponse(route('admin.units.index'), ['flash_success' => __('alerts.backend.brand.deleted')]);
    }
}
