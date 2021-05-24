<?php
namespace App\Http\Controllers\Backend\Suppliers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Suppliers\CreateSuppliersRequest;
use App\Http\Requests\Backend\Suppliers\DeleteSuppliersRequest;
use App\Http\Requests\Backend\Suppliers\ManageSuppliersRequest;
use App\Http\Requests\Backend\Suppliers\StoreSuppliersRequest;
use App\Http\Requests\Backend\Suppliers\UpdateSuppliersRequest;
use App\Http\Responses\Backend\Suppliers\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Supplier;

use App\Models\Company;


use App\Repositories\Backend\SuppliersRepository;
use Illuminate\Support\Facades\View;

class SuppliersController extends Controller
{
    /**
     * @var \App\Repositories\Backend\SuppliersRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\SuppliersRepository $repository
     */
    public function __construct(SuppliersRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['suppliers']);
    }

    /**
     * @param \App\Http\Requests\Backend\Suppliers\ManageSuppliersRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageSuppliersRequest $request)
    {
		
        return new ViewResponse('backend.Suppliers.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Suppliers\CreateSuppliersRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateSuppliersRequest $request)
    {
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
		
		
        return new ViewResponse('backend.Suppliers.create' , ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Suppliers\StoreSuppliersRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreSuppliersRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.suppliers.index'), ['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    /**
     * @param \App\Models\Supplier $Supplier
     * @param \App\Http\Requests\Backend\Suppliers\ManageSuppliersRequest $request
     *
     * @return \App\Http\Responses\Backend\Supplier\EditResponse
     */
    public function edit(Supplier $Supplier, ManageSuppliersRequest $request)
    {
		
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
        return new EditResponse($Supplier,$companies);
    }

    /**
     * @param \App\Models\Supplier $Supplier
     * @param \App\Http\Requests\Backend\Suppliers\UpdateSuppliersRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Supplier $Supplier, UpdateSuppliersRequest $request)
    {
        $this->repository->update($Supplier, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.suppliers.index'), ['flash_success' => __('alerts.backend.blog-category.updated')]);
    }

    /**
     * @param \App\Models\Supplier $Supplier
     * @param \App\Http\Requests\Backend\Suppliers\DeleteSuppliersRequest $request
     *
     * @return mixed
     */
    public function destroy(Supplier $Supplier, DeleteSuppliersRequest $request)
    {
        $this->repository->delete($Supplier);

        return new RedirectResponse(route('admin.suppliers.index'), ['flash_success' => __('alerts.backend.blog-category.deleted')]);
    }
}
