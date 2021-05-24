<?php
namespace App\Http\Controllers\Backend\Companies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Companies\CreateCompaniesRequest;
use App\Http\Requests\Backend\Companies\DeleteCompaniesRequest;
use App\Http\Requests\Backend\Companies\ManageCompaniesRequest;
use App\Http\Requests\Backend\Companies\StoreCompaniesRequest;
use App\Http\Requests\Backend\Companies\UpdateCompaniesRequest;
use App\Http\Responses\Backend\Companies\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Company;



use App\Models\Currency;


use App\Repositories\Backend\CompaniesRepository;
use Illuminate\Support\Facades\View;

class CompaniesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\CompaniesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\CompaniesRepository $repository
     */
    public function __construct(CompaniesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['companies']);
    }

    /**
     * @param \App\Http\Requests\Backend\Companies\ManageCompaniesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageCompaniesRequest $request)
    {
		
        return new ViewResponse('backend.companies.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Companies\CreateCompaniesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateCompaniesRequest $request)
    {
        //return new ViewResponse('backend.companies.create');
		
		$currencies = Currency::getSelectDatas();
		
        $currencies = collect(['' => 'Select Currency'] + $currencies);
		
		
        return new ViewResponse('backend.companies.create' , ['currencies' => $currencies]);
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Companies\StoreCompaniesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreCompaniesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.companies.index'), ['flash_success' => __('alerts.backend.companies.created')]);
    }

    /**
     * @param \App\Models\Company $Company
     * @param \App\Http\Requests\Backend\Companies\ManageCompaniesRequest $request
     *
     * @return \App\Http\Responses\Backend\Company\EditResponse
     */
    public function edit(Company $Company, ManageCompaniesRequest $request)
    {
		
		$currencies = Currency::getSelectDatas();
		
        $currencies = collect(['' => 'Select Currency'] + $currencies);
        return new EditResponse($Company, $currencies);
    }

    /**
     * @param \App\Models\Company $Company
     * @param \App\Http\Requests\Backend\Companies\UpdateCompaniesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Company $Company, UpdateCompaniesRequest $request)
    {
        $this->repository->update($Company, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.companies.index'), ['flash_success' => __('alerts.backend.companies.updated')]);
    }

    /**
     * @param \App\Models\Company $Company
     * @param \App\Http\Requests\Backend\Companies\DeleteCompaniesRequest $request
     *
     * @return mixed
     */
    public function destroy(Company $Company, DeleteCompaniesRequest $request)
    {
        $this->repository->delete($Company);

        return new RedirectResponse(route('admin.companies.index'), ['flash_success' => __('alerts.backend.companies.deleted')]);
    }
}
