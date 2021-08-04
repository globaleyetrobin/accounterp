<?php

namespace App\Http\Controllers\Backend\Accountcategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Accountcategories\CreateAccountcategoriesRequest;
use App\Http\Requests\Backend\Accountcategories\DeleteAccountcategoriesRequest;
use App\Http\Requests\Backend\Accountcategories\ManageAccountcategoriesRequest;
use App\Http\Requests\Backend\Accountcategories\StoreAccountcategoriesRequest;
use App\Http\Requests\Backend\Accountcategories\UpdateAccountcategoriesRequest;
use App\Http\Responses\Backend\Accountcategory\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Accountcategory;
use App\Models\Accounttype;

use App\Repositories\Backend\AccountcategoriesRepository;
use Illuminate\Support\Facades\View;

class AccountcategoriesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AccountcategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\AccountcategoriesRepository $repository
     */
    public function __construct(AccountcategoriesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['accountcategories']);
    }

    /**
     * @param \App\Http\Requests\Backend\Accountcategories\ManageAccountcategoriesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageAccountcategoriesRequest $request)
    {
		
		
        return new ViewResponse('backend.accountcategories.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Accountcategories\CreateAccountcategoriesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateAccountcategoriesRequest $request, Accountcategory $accountcategory)
    {
		
	
		$catlist = Accounttype::Accounttypeselectlist();

        $creditdebits=$accountcategory->creditdebits;


        //'taxtypes' => $purchase->taxtypes, 

       
        return new ViewResponse('backend.accountcategories.create', ['catlist' => $catlist, 'creditdebits' =>$creditdebits ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Accountcategories\StoreAccountcategoriesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreAccountcategoriesRequest $request)
    {
		
		
        $this->repository->create($request->except(['_token', '_method']));
		
		

        return new RedirectResponse(route('admin.accountcategories.index'), ['flash_success' => __('alerts.backend.accountcategory.created')]);
    }

    /**
     * @param \App\Models\Accountcategory $Accountcategory
     * @param \App\Http\Requests\Backend\Accountcategories\ManageAccountcategoriesRequest $request
     *
     * @return \App\Http\Responses\Backend\Accountcategory\EditResponse
     */
    public function edit(Accountcategory $Accountcategory, ManageAccountcategoriesRequest $request)
    {
		
		//$catlist = Accountcategory::Accountcategoryselectlist();

        $creditdebits=$Accountcategory->creditdebits;

     $catlist = Accounttype::Accounttypeselectlist();
		
        return new EditResponse($Accountcategory,$catlist,$creditdebits);
    }

    /**
     * @param \App\Models\Accountcategory $Accountcategory
     * @param \App\Http\Requests\Backend\Accountcategories\UpdateAccountcategoriesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Accountcategory $Accountcategory, UpdateAccountcategoriesRequest $request)
    {
        $this->repository->update($Accountcategory, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.accountcategories.index'), ['flash_success' => __('alerts.backend.accountcategory.updated')]);
    }

    /**
     * @param \App\Models\Accountcategory $Accountcategory
     * @param \App\Http\Requests\Backend\Accountcategories\DeleteAccountcategoriesRequest $request
     *
     * @return mixed
     */
    public function destroy(Accountcategory $Accountcategory, DeleteAccountcategoriesRequest $request)
    {
        $this->repository->delete($Accountcategory);

        return new RedirectResponse(route('admin.accountcategories.index'), ['flash_success' => __('alerts.backend.accountcategory.deleted')]);
    }
}
