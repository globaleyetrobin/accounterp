<?php

namespace App\Http\Controllers\Backend\Accounttypes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Accounttypes\CreateAccounttypesRequest;
use App\Http\Requests\Backend\Accounttypes\DeleteAccounttypesRequest;
use App\Http\Requests\Backend\Accounttypes\ManageAccounttypesRequest;
use App\Http\Requests\Backend\Accounttypes\StoreAccounttypesRequest;
use App\Http\Requests\Backend\Accounttypes\UpdateAccounttypesRequest;
use App\Http\Responses\Backend\Accounttype\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Accounttype;
use App\Repositories\Backend\AccounttypesRepository;
use Illuminate\Support\Facades\View;

class AccounttypesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AccounttypesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\AccounttypesRepository $repository
     */
    public function __construct(AccounttypesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['accounttypes']);
    }

    /**
     * @param \App\Http\Requests\Backend\Accounttypes\ManageAccounttypesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageAccounttypesRequest $request)
    {
		
		
        return new ViewResponse('backend.accounttypes.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Accounttypes\CreateAccounttypesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateAccounttypesRequest $request)
    {
		
	
		$catlist = Accounttype::Accounttypeselectlist();
		
        return new ViewResponse('backend.accounttypes.create', ['catlist' => $catlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Accounttypes\StoreAccounttypesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreAccounttypesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.accounttypes.index'), ['flash_success' => __('alerts.backend.blog-accounttype.created')]);
    }

    /**
     * @param \App\Models\Accounttype $Accounttype
     * @param \App\Http\Requests\Backend\Accounttypes\ManageAccounttypesRequest $request
     *
     * @return \App\Http\Responses\Backend\Accounttype\EditResponse
     */
    public function edit(Accounttype $Accounttype, ManageAccounttypesRequest $request)
    {
		
		$catlist = Accounttype::Accounttypeselectlist();
		
        return new EditResponse($Accounttype,$catlist);
    }

    /**
     * @param \App\Models\Accounttype $Accounttype
     * @param \App\Http\Requests\Backend\Accounttypes\UpdateAccounttypesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Accounttype $Accounttype, UpdateAccounttypesRequest $request)
    {
        $this->repository->update($Accounttype, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.accounttypes.index'), ['flash_success' => __('alerts.backend.blog-accounttype.updated')]);
    }

    /**
     * @param \App\Models\Accounttype $Accounttype
     * @param \App\Http\Requests\Backend\Accounttypes\DeleteAccounttypesRequest $request
     *
     * @return mixed
     */
    public function destroy(Accounttype $Accounttype, DeleteAccounttypesRequest $request)
    {
        $this->repository->delete($Accounttype);

        return new RedirectResponse(route('admin.accounttypes.index'), ['flash_success' => __('alerts.backend.blog-accounttype.deleted')]);
    }
}
