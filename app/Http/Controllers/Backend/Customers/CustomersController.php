<?php
namespace App\Http\Controllers\Backend\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Customers\CreateCustomersRequest;
use App\Http\Requests\Backend\Customers\DeleteCustomersRequest;
use App\Http\Requests\Backend\Customers\ManageCustomersRequest;
use App\Http\Requests\Backend\Customers\StoreCustomersRequest;
use App\Http\Requests\Backend\Customers\UpdateCustomersRequest;
use App\Http\Responses\Backend\Customers\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Customer;

use App\Models\Company;


use App\Repositories\Backend\CustomersRepository;
use Illuminate\Support\Facades\View;

class CustomersController extends Controller
{
    /**
     * @var \App\Repositories\Backend\CustomersRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\CustomersRepository $repository
     */
    public function __construct(CustomersRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['customers']);
    }

    /**
     * @param \App\Http\Requests\Backend\Customers\ManageCustomersRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageCustomersRequest $request)
    {
		
        return new ViewResponse('backend.Customers.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Customers\CreateCustomersRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateCustomersRequest $request)
    {
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
		
		
        return new ViewResponse('backend.Customers.create' , ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Customers\StoreCustomersRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreCustomersRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.customers.index'), ['flash_success' => __('alerts.backend.blog-category.created')]);
    }

    /**
     * @param \App\Models\Customer $Customer
     * @param \App\Http\Requests\Backend\Customers\ManageCustomersRequest $request
     *
     * @return \App\Http\Responses\Backend\Customer\EditResponse
     */
    public function edit(Customer $Customer, ManageCustomersRequest $request)
    {
		
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
        return new EditResponse($Customer,$companies);
    }

    /**
     * @param \App\Models\Customer $Customer
     * @param \App\Http\Requests\Backend\Customers\UpdateCustomersRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Customer $Customer, UpdateCustomersRequest $request)
    {
        $this->repository->update($Customer, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.customers.index'), ['flash_success' => __('alerts.backend.blog-category.updated')]);
    }

    /**
     * @param \App\Models\Customer $Customer
     * @param \App\Http\Requests\Backend\Customers\DeleteCustomersRequest $request
     *
     * @return mixed
     */
    public function destroy(Customer $Customer, DeleteCustomersRequest $request)
    {
        $this->repository->delete($Customer);

        return new RedirectResponse(route('admin.customers.index'), ['flash_success' => __('alerts.backend.blog-category.deleted')]);
    }
}
