<?php

namespace App\Http\Controllers\Backend\Purchases;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Purchases\ManagePurchasesRequest;
use App\Repositories\Backend\PurchasesRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class PurchasesTableController.
 */
class PurchasesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\PurchasesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\PurchasesRepository $repository
     */
    public function __construct(PurchasesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Purchases\ManagePurchasesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePurchasesRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['purchase_no'])
            ->addColumn('status', function ($purchases) {
                return $purchases->status;
            })
           
            ->addColumn('created_by', function ($purchases) {
                return $purchases->user_name;
            })
            ->addColumn('created_at', function ($purchases) {
                return $purchases->created_at->toDateString();
            })
            ->addColumn('actions', function ($purchases) {
                return $purchases->action_buttons;
            })
            ->make(true);
    }
}
