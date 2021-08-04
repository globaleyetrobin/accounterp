<?php

namespace App\Http\Controllers\Backend\Journels;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Journels\CreateJournelsRequest;
use App\Http\Requests\Backend\Journels\DeleteJournelsRequest;
use App\Http\Requests\Backend\Journels\ManageJournelsRequest;
use App\Http\Requests\Backend\Journels\StoreJournelsRequest;
use App\Http\Requests\Backend\Journels\UpdateJournelsRequest;
use App\Http\Responses\Backend\Journel\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Journel;
use App\Models\Accountcategory;
use App\Models\Accountsubcategory;
use App\Models\Accounttype;

use App\Repositories\Backend\JournelsRepository;
use Illuminate\Support\Facades\View;

class JournelsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\JournelsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\JournelsRepository $repository
     */
    public function __construct(JournelsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['journels']);
    }

    /**
     * @param \App\Http\Requests\Backend\Journels\ManageJournelsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageJournelsRequest $request)
    {
		
		
        return new ViewResponse('backend.journels.index');
    }


   public function getLedger(ManageJournelsRequest $request,   Journel $journel)
   {

    $catlist = Accountcategory::Accountcategoryselectlist();

        $subcatlist = Accountsubcategory::Accountsubcategoryselectlist();


        $accounttype = Accounttype::Accounttypeselectlist();

        $creditdebits=$journel->creditdebits;

     return new ViewResponse('backend.journels.ledger', ['catlist' => $catlist ,'subcatlist' => $subcatlist , 'accounttype' => $accounttype , 'creditdebits' => $creditdebits]);

    // return new ViewResponse('backend.journels.ledger');
   }
    /**
     * @param \App\Http\Requests\Backend\Journels\CreateJournelsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateJournelsRequest $request,  Journel $journel)
    {
		
	
		$catlist = Accountcategory::Accountcategoryselectlist();

        $subcatlist = Accountsubcategory::Accountsubcategoryselectlist();


        $accounttype = Accounttype::Accounttypeselectlist();

        $creditdebits=$journel->creditdebits;


       

        return new ViewResponse('backend.journels.create', ['catlist' => $catlist ,'subcatlist' => $subcatlist , 'accounttype' => $accounttype , 'creditdebits' => $creditdebits]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Journels\StoreJournelsRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreJournelsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.journels.index'), ['flash_success' => __('alerts.backend.blog-journel.created')]);
    }

    /**
     * @param \App\Models\Journel $Journel
     * @param \App\Http\Requests\Backend\Journels\ManageJournelsRequest $request
     *
     * @return \App\Http\Responses\Backend\Journel\EditResponse
     */
    public function edit(Journel $Journel, ManageJournelsRequest $request)
    {
		
		//$catlist = Journel::Journelselectlist();

        //$catlist = Accountcategory::Accountcategoryselectlist();

        $catlist = Accountcategory::Accountcategoryselectlist();

        $subcatlist = Accountsubcategory::Accountsubcategoryselectlist();


        $accounttype = Accounttype::Accounttypeselectlist();
        $creditdebits=$Journel->creditdebits;
		
        return new EditResponse($Journel,$catlist,$subcatlist,$accounttype,$creditdebits);
    }

    /**
     * @param \App\Models\Journel $Journel
     * @param \App\Http\Requests\Backend\Journels\UpdateJournelsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Journel $Journel, UpdateJournelsRequest $request)
    {
        $this->repository->update($Journel, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.journels.index'), ['flash_success' => __('alerts.backend.blog-journel.updated')]);
    }

    /**
     * @param \App\Models\Journel $Journel
     * @param \App\Http\Requests\Backend\Journels\DeleteJournelsRequest $request
     *
     * @return mixed
     */
    public function destroy(Journel $Journel, DeleteJournelsRequest $request)
    {
        $this->repository->delete($Journel);

        return new RedirectResponse(route('admin.journels.index'), ['flash_success' => __('alerts.backend.blog-journel.deleted')]);
    }
}
