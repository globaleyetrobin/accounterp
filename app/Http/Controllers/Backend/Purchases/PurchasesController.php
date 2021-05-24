<?php

namespace App\Http\Controllers\Backend\Purchases;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Purchases\ManagePurchasesRequest;
use App\Http\Requests\Backend\Purchases\StorePurchasesRequest;
use App\Http\Requests\Backend\Purchases\UpdatePurchasesRequest;
use App\Http\Responses\Backend\Purchases\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Purchase;

use App\Models\Purchaseitem;


use App\Models\Category;

use App\Models\Brand;

use App\Models\Unit;

use App\Models\Company;

use App\Models\Branch;

use App\Models\Supplier;





use App\Models\Product;


use App\Repositories\Backend\PurchasesRepository;
use Illuminate\Support\Facades\View;

class PurchasesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\PurchasesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\PurchasesRepository $purchase
     */
    public function __construct(PurchasesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['purchases']);
    }

    /**
     * @param \App\Http\Requests\Backend\Purchases\ManagePurchasesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManagePurchasesRequest $request)
    {
        return new ViewResponse('backend.purchases.index');
    }

    public function subcategory(ManagePurchasesRequest $request)
    {

        $catid=$request->catid;

        $subcategories = Category::where('categories.parent_id', '=', $catid)
        ->select('id','name')->get();

        return new ViewResponse('backend.purchases.subcategory', [
            'subcategories' => $subcategories, 
        
        ]);

        
    }

     
    public function productlist(ManagePurchasesRequest $request)
    {

        $subcatid=$request->subcatid;

        $productslist = Product::where('product_subcat', '=', $subcatid)
        ->select('id','product_name')->get();

        return new ViewResponse('backend.purchases.product', [
            'productslist' => $productslist, 
        
        ]);

        
    }
    /**
     * @param \App\Http\Requests\Backend\Purchases\ManagePurchasesRequest $request
     *
     * @return ViewResponse
     */
    public function create(ManagePurchasesRequest $request, Purchase $purchase)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $purchaseCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($purchaseCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $purchaseCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '!=', null)
        ->select('id','name')->get();

        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        
        $purchaseSubcategories = collect(['' => 'Select'] + $subcat);



		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$suppliers = Supplier::getSelectData();
        $suppliers = collect(['' => 'Select Supplier'] + $suppliers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select'] + $products);
		
		


        return new ViewResponse('backend.purchases.create', ['status' => $purchase->statuses, 
        'purchaseCategories' => $purchaseCategories, 
        'purchaseSubcategories' => $purchaseSubcategories, 
        'Brands' => $Brands,
        'Units' => $Units,
		'companies' => $companies,
        'branches' => $branches,
		'products' => $products,
		
		'suppliers' => $suppliers,
		'discounttype' => $purchase->discounttypes, 
		'taxtypes' => $purchase->taxtypes, 
		
        ]);
    }

    /**
     * @param \App\Http\Requests\Backend\Purchases\StorePurchasesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StorePurchasesRequest $request)
    {
       $purchases= $this->repository->create($request->except(['_token', '_method']));
		
		$id=$purchases->id;
		
		//purchase/purchases/purchasesprint/1
		
		 
        return new RedirectResponse(route('admin.purchases.purchasesprint', $id), ['flash_success' => __('alerts.backend.purchases.created')]);
    }

    /**
     * @param \App\Models\Purchase $purchase
     * @param \App\Http\Requests\Backend\Purchases\ManagePurchasesRequest $request
     *
     * @return \App\Http\Responses\Backend\Purchases\EditResponse
     */
    public function edit(Purchase $purchase, ManagePurchasesRequest $request)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        
        $purchaseCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($purchaseCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $purchaseCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '!=', null)
        ->select('id','name')->get();

        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        
        $purchaseSubcategories = collect(['' => 'Select'] + $subcat);

		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$suppliers = Supplier::getSelectData();
        $suppliers = collect(['' => 'Select Supplier'] + $suppliers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
		$purchaseitems = Purchaseitem::where('purchase_id',$purchase->id)->get();
		
		/*foreach($purchaseitems as $items)
		{
			print_r($items);
			echo "<br>";
		}
		exit;
		*/


        return new EditResponse($purchase, $purchase->statuses, $purchaseCategories,$purchaseSubcategories, $Brands,$Units,$companies,$branches,
		                        $products,$suppliers,$purchase->discounttypes,$purchase->taxtypes,$purchaseitems);
		
		
		
		
		
		
		
    }

    /**
     * @param \App\Models\Purchases\Purchase $purchase
     * @param \App\Http\Requests\Backend\Purchases\UpdatePurchasesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Purchase $purchase, UpdatePurchasesRequest $request)
    {
        $this->repository->update($purchase, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.purchases.index'), ['flash_success' => __('alerts.backend.purchases.updated')]);
    }

    /**
     * @param \App\Models\Purchase $purchase
     * @param \App\Http\Requests\Backend\Purchases\ManagePurchasesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Purchase $purchase, ManagePurchasesRequest $request)
    {
        $this->repository->delete($purchase);

        return new RedirectResponse(route('admin.purchases.index'), ['flash_success' => __('alerts.backend.purchases.deleted')]);
    }
	
	
	
	
	
	
	
	
	
	   public function purchasesprint(Purchase $purchase, ManagePurchasesRequest $request)
    {

   
   
        $purchaseitems = Purchaseitem::select(
            "purchaseitems.*", 
            "products.product_name"
        )
        ->leftJoin("products", "products.id", "=", "purchaseitems.purchaseitems_name")
        ->where('purchase_id',$request->id)->get();
		
		
		
		
        

        $purchase = Purchase::select(
            "purchases.*", 
            "companies.name as compnay_name",
            "branches.name as branch_name",
            "suppliers.name as supplier_name",
            "suppliers.address as supplier_address",
            "suppliers.phoneno as supplier_phoneno",
            "suppliers.email as supplier_email",
        )
        ->leftJoin("companies", "companies.id", "=", "purchases.purchase_company")
        ->leftJoin("branches", "branches.id", "=", "purchases.purchase_branch")
        ->leftJoin("suppliers", "suppliers.id", "=", "purchases.purchase_supplier")
        ->where('purchases.id',$request->id)->first();
        

      
        


                            

		return view('backend.purchases.print', [
        'purchaseitems' => $purchaseitems, 
        'purchases' => $purchase, 
		
        ]);
		
        
		
		
		
    }
}
