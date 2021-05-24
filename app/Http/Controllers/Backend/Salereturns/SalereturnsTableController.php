<?php

namespace App\Http\Controllers\Backend\Salereturns;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Salereturns\ManageSalereturnsRequest;
use App\Repositories\Backend\SalereturnsRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class SalereturnsTableController.
 */
class SalereturnsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\SalereturnsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\SalereturnsRepository $repository
     */
    public function __construct(SalereturnsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Salereturns\ManageSalereturnsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSalereturnsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['salereturn_no'])
            ->addColumn('status', function ($salereturns) {
                return $salereturns->status;
            })
           
            ->addColumn('created_by', function ($salereturns) {
                return $salereturns->user_name;
            })
            ->addColumn('created_at', function ($salereturns) {
                return $salereturns->created_at->toDateString();
            })
            ->addColumn('actions', function ($salereturns) {
                return $salereturns->action_buttons;
            })
            ->make(true);
    }
}
