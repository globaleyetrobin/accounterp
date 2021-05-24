<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Products\ManageProductsRequest;
use App\Repositories\Backend\ProductsRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class ProductsTableController.
 */
class ProductstocksTableController extends Controller
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
		
		
        return Datatables::of($this->repository->getForDataTables())
            ->escapeColumns(['product_name'])
            ->addColumn('status', function ($products) {
                return $products->status;
            })
			->editColumn('product_code', function ($products) {
				
				$stoks=($products->totalpurchase)-($products->totalsales)+($products->goodproduct)-($products->demageproduct);
				
				$stoks=max($stoks, 0);
                return $stoks;
            })
			
           
           
            ->make(true);
    }
}
