<?php

namespace App\Http\Controllers\Backend\Purchasereturns;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Purchasereturns\ManagePurchasereturnsRequest;
use App\Repositories\Backend\PurchasereturnsRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class PurchasereturnsTableController.
 */
class PurchasereturnsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\PurchasereturnsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\PurchasereturnsRepository $repository
     */
    public function __construct(PurchasereturnsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Purchasereturns\ManagePurchasereturnsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePurchasereturnsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['purchasereturn_no'])
            ->addColumn('status', function ($purchasereturns) {
                return $purchasereturns->status;
            })
           
            ->addColumn('created_by', function ($purchasereturns) {
                return $purchasereturns->user_name;
            })
            ->addColumn('created_at', function ($purchasereturns) {
                return $purchasereturns->created_at->toDateString();
            })
            ->addColumn('actions', function ($purchasereturns) {
                return $purchasereturns->action_buttons;
            })
            ->make(true);
    }
}
