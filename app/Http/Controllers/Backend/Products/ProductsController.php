<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Products\ManageProductsRequest;
use App\Http\Requests\Backend\Products\StoreProductsRequest;
use App\Http\Requests\Backend\Products\UpdateProductsRequest;
use App\Http\Responses\Backend\Products\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Product;
use App\Models\Category;

use App\Models\Brand;

use App\Models\Unit;

use App\Repositories\Backend\ProductsRepository;
use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\ProductsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\ProductsRepository $product
     */
    public function __construct(ProductsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['products']);
    }

    /**
     * @param \App\Http\Requests\Backend\Products\ManageProductsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageProductsRequest $request)
    {
        return new ViewResponse('backend.products.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Products\ManageProductsRequest $request
     *
     * @return ViewResponse
     */
    public function create(ManageProductsRequest $request, Product $product)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


      /*  $productCategories = Category::getSelectData();

        $productCategories = collect(['' => 'Select Category'] + $productCategories);

      */


        $productCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($productCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $productCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '!=', null)
        ->select('id','name')->get();

        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        $productSubcategories = collect(['' => 'Select'] + $subcat);


        return new ViewResponse('backend.products.create', ['status' => $product->statuses, 
        'productCategories' => $productCategories, 
        'productSubcategories' => $productSubcategories, 
        'Brands' => $Brands,
        'Units' => $Units,
        ]);
    }

    /**
     * @param \App\Http\Requests\Backend\Products\StoreProductsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreProductsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.products.index'), ['flash_success' => __('alerts.backend.products.created')]);
    }

    /**
     * @param \App\Models\Product $product
     * @param \App\Http\Requests\Backend\Products\ManageProductsRequest $request
     *
     * @return \App\Http\Responses\Backend\Products\EditResponse
     */
    public function edit(Product $product, ManageProductsRequest $request)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $productCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($productCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $productCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '=', $product->product_cat)
        ->select('id','name')->get();



        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        $productSubcategories = collect(['' => 'Select'] + $subcat);

        return new EditResponse($product, $product->statuses, $Brands, $Units,$productCategories,$productSubcategories );
    }

    /**
     * @param \App\Models\Products\Product $product
     * @param \App\Http\Requests\Backend\Products\UpdateProductsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Product $product, UpdateProductsRequest $request)
    {
        $this->repository->update($product, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.products.index'), ['flash_success' => __('alerts.backend.products.updated')]);
    }

    /**
     * @param \App\Models\Product $product
     * @param \App\Http\Requests\Backend\Products\ManageProductsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Product $product, ManageProductsRequest $request)
    {
        $this->repository->delete($product);

        return new RedirectResponse(route('admin.products.index'), ['flash_success' => __('alerts.backend.products.deleted')]);
    }
	
	public function stock()
	{
		    $stocks = Product::get();
			
			
				return view('backend.products.stock', [
				'stocks' => $stocks
       
		
        ]);

	}
}
