<?php

namespace App\Http\Controllers\Backend\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sales\ManageSalesRequest;
use App\Repositories\Backend\SalesRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class SalesTableController.
 */
class SalesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\SalesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\SalesRepository $repository
     */
    public function __construct(SalesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Sales\ManageSalesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSalesRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['sale_no'])
            ->addColumn('status', function ($sales) {
                return $sales->status;
            })
           
            ->addColumn('created_by', function ($sales) {
                return $sales->user_name;
            })
            ->addColumn('created_at', function ($sales) {
                return $sales->created_at->toDateString();
            })
            ->addColumn('actions', function ($sales) {
                return $sales->action_buttons;
            })
            ->make(true);
    }
}
