<?php

namespace App\Http\Controllers\Backend\Accountsubcategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Accountsubcategories\CreateAccountsubcategoriesRequest;
use App\Http\Requests\Backend\Accountsubcategories\DeleteAccountsubcategoriesRequest;
use App\Http\Requests\Backend\Accountsubcategories\ManageAccountsubcategoriesRequest;
use App\Http\Requests\Backend\Accountsubcategories\StoreAccountsubcategoriesRequest;
use App\Http\Requests\Backend\Accountsubcategories\UpdateAccountsubcategoriesRequest;
use App\Http\Responses\Backend\Accountsubcategory\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Accountsubcategory;
use App\Models\Accounttype;

use App\Models\Accountcategory;

use App\Repositories\Backend\AccountsubcategoriesRepository;
use Illuminate\Support\Facades\View;

class AccountsubcategoriesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AccountsubcategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\AccountsubcategoriesRepository $repository
     */
    public function __construct(AccountsubcategoriesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['accountsubcategories']);
    }

    /**
     * @param \App\Http\Requests\Backend\Accountsubcategories\ManageAccountsubcategoriesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageAccountsubcategoriesRequest $request)
    {
		
		
        return new ViewResponse('backend.accountsubcategories.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Accountsubcategories\CreateAccountsubcategoriesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateAccountsubcategoriesRequest $request, Accountsubcategory $accountsubcategory)
    {
		
	
		$catlist = Accounttype::Accounttypeselectlist();

        //$creditdebits=$accountsubcategory->creditdebits;

        $creditdebits = Accountcategory::Accountcategoryselectlist();



        //'taxtypes' => $purchase->taxtypes, 

       
        return new ViewResponse('backend.accountsubcategories.create', ['catlist' => $catlist, 'creditdebits' =>$creditdebits ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Accountsubcategories\StoreAccountsubcategoriesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreAccountsubcategoriesRequest $request)
    {
		
		
        $this->repository->create($request->except(['_token', '_method']));
		
		

        return new RedirectResponse(route('admin.accountsubcategories.index'), ['flash_success' => __('alerts.backend.accountsubcategory.created')]);
    }

    /**
     * @param \App\Models\Accountsubcategory $Accountsubcategory
     * @param \App\Http\Requests\Backend\Accountsubcategories\ManageAccountsubcategoriesRequest $request
     *
     * @return \App\Http\Responses\Backend\Accountsubcategory\EditResponse
     */
    public function edit(Accountsubcategory $Accountsubcategory, ManageAccountsubcategoriesRequest $request)
    {
		
		//$catlist = Accountsubcategory::Accountsubcategoryselectlist();

        //$creditdebits=$Accountsubcategory->creditdebits;

        $creditdebits = Accountcategory::Accountcategoryselectlist();

     $catlist = Accounttype::Accounttypeselectlist();
		
        return new EditResponse($Accountsubcategory,$catlist,$creditdebits);
    }

    /**
     * @param \App\Models\Accountsubcategory $Accountsubcategory
     * @param \App\Http\Requests\Backend\Accountsubcategories\UpdateAccountsubcategoriesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Accountsubcategory $Accountsubcategory, UpdateAccountsubcategoriesRequest $request)
    {
        $this->repository->update($Accountsubcategory, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.accountsubcategories.index'), ['flash_success' => __('alerts.backend.accountsubcategory.updated')]);
    }

    /**
     * @param \App\Models\Accountsubcategory $Accountsubcategory
     * @param \App\Http\Requests\Backend\Accountsubcategories\DeleteAccountsubcategoriesRequest $request
     *
     * @return mixed
     */
    public function destroy(Accountsubcategory $Accountsubcategory, DeleteAccountsubcategoriesRequest $request)
    {
        $this->repository->delete($Accountsubcategory);

        return new RedirectResponse(route('admin.accountsubcategories.index'), ['flash_success' => __('alerts.backend.accountsubcategory.deleted')]);
    }
}
