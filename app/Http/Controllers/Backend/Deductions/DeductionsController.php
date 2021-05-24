<?php

namespace App\Http\Controllers\Backend\Deductions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Deductions\CreateDeductionsRequest;
use App\Http\Requests\Backend\Deductions\DeleteDeductionsRequest;
use App\Http\Requests\Backend\Deductions\ManageDeductionsRequest;
use App\Http\Requests\Backend\Deductions\StoreDeductionsRequest;
use App\Http\Requests\Backend\Deductions\UpdateDeductionsRequest;
use App\Http\Responses\Backend\Deductions\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Deduction;
use App\Repositories\Backend\DeductionsRepository;
use Illuminate\Support\Facades\View;

class DeductionsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\DeductionsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\DeductionsRepository $repository
     */
    public function __construct(DeductionsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['deductions']);
    }

    /**
     * @param \App\Http\Requests\Backend\Deductions\ManageDeductionsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageDeductionsRequest $request)
    {
		
		
        return new ViewResponse('backend.deductions.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Deductions\CreateDeductionsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateDeductionsRequest $request)
    {
		;
        return new ViewResponse('backend.deductions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Deductions\StoreDeductionsRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreDeductionsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.deductions.index'), ['flash_success' => __('alerts.backend.deduction.created')]);
    }

    /**
     * @param \App\Models\deduction $Deduction
     * @param \App\Http\Requests\Backend\Deductions\ManageDeductionsRequest $request
     *
     * @return \App\Http\Responses\Backend\deduction\EditResponse
     */
    public function edit(Deduction $Deduction, ManageDeductionsRequest $request)
    {
		
	
		
        return new EditResponse($Deduction);
    }

    /**
     * @param \App\Models\deduction $Deduction
     * @param \App\Http\Requests\Backend\Deductions\UpdateDeductionsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Deduction $Deduction, UpdateDeductionsRequest $request)
    {
        $this->repository->update($Deduction, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.deductions.index'), ['flash_success' => __('alerts.backend.deduction.updated')]);
    }

    /**
     * @param \App\Models\deduction $Deduction
     * @param \App\Http\Requests\Backend\Deductions\DeleteDeductionsRequest $request
     *
     * @return mixed
     */
    public function destroy(Deduction $Deduction, DeleteDeductionsRequest $request)
    {
        $this->repository->delete($Deduction);

        return new RedirectResponse(route('admin.deductions.index'), ['flash_success' => __('alerts.backend.deduction.deleted')]);
    }
}
