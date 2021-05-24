<?php

namespace App\Http\Controllers\Backend\Currencies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Currencies\CreateCurrenciesRequest;
use App\Http\Requests\Backend\Currencies\DeleteCurrenciesRequest;
use App\Http\Requests\Backend\Currencies\ManageCurrenciesRequest;
use App\Http\Requests\Backend\Currencies\StoreCurrenciesRequest;
use App\Http\Requests\Backend\Currencies\UpdateCurrenciesRequest;
use App\Http\Responses\Backend\Currencies\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Currency;
use App\Repositories\Backend\CurrenciesRepository;
use Illuminate\Support\Facades\View;

class CurrenciesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\CurrenciesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\CurrenciesRepository $repository
     */
    public function __construct(CurrenciesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['currencies']);
    }

    /**
     * @param \App\Http\Requests\Backend\Currencies\ManageCurrenciesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageCurrenciesRequest $request)
    {
		
		
        return new ViewResponse('backend.currencies.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Currencies\CreateCurrenciesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateCurrenciesRequest $request)
    {
		;
        return new ViewResponse('backend.currencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Currencies\StoreCurrenciesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreCurrenciesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.currencies.index'), ['flash_success' => __('alerts.backend.currency.created')]);
    }

    /**
     * @param \App\Models\currency $Currency
     * @param \App\Http\Requests\Backend\Currencies\ManageCurrenciesRequest $request
     *
     * @return \App\Http\Responses\Backend\currency\EditResponse
     */
    public function edit(Currency $Currency, ManageCurrenciesRequest $request)
    {
		
	
		
        return new EditResponse($Currency);
    }

    /**
     * @param \App\Models\currency $Currency
     * @param \App\Http\Requests\Backend\Currencies\UpdateCurrenciesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Currency $Currency, UpdateCurrenciesRequest $request)
    {
        $this->repository->update($Currency, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.currencies.index'), ['flash_success' => __('alerts.backend.currency.updated')]);
    }

    /**
     * @param \App\Models\currency $Currency
     * @param \App\Http\Requests\Backend\Currencies\DeleteCurrenciesRequest $request
     *
     * @return mixed
     */
    public function destroy(Currency $Currency, DeleteCurrenciesRequest $request)
    {
        $this->repository->delete($Currency);

        return new RedirectResponse(route('admin.currencies.index'), ['flash_success' => __('alerts.backend.currency.deleted')]);
    }
}
