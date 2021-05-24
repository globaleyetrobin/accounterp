<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Products\ManageProductsRequest;
use App\Repositories\Backend\ProductsRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class ProductsTableController.
 */
class ProductsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\ProductsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\ProductsRepository $repository
     */
    public function __construct(ProductsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Products\ManageProductsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageProductsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['product_name'])
            ->addColumn('status', function ($products) {
                return $products->status;
            })
           
            ->addColumn('created_by', function ($products) {
                return $products->user_name;
            })
            ->addColumn('created_at', function ($products) {
                return $products->created_at->toDateString();
            })
            ->addColumn('actions', function ($products) {
                return $products->action_buttons;
            })
            ->make(true);
    }
}
