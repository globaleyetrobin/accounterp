<?php

namespace App\Http\Controllers\Backend\Purchasereturns;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Purchasereturns\ManagePurchasereturnsRequest;
use App\Http\Requests\Backend\Purchasereturns\StorePurchasereturnsRequest;
use App\Http\Requests\Backend\Purchasereturns\UpdatePurchasereturnsRequest;
use App\Http\Responses\Backend\Purchasereturns\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Purchasereturn;

use App\Models\Purchasereturnitem;


use App\Models\Category;

use App\Models\Brand;

use App\Models\Unit;

use App\Models\Company;

use App\Models\Branch;

use App\Models\Supplier;





use App\Models\Product;


use App\Repositories\Backend\PurchasereturnsRepository;
use Illuminate\Support\Facades\View;

class PurchasereturnsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\PurchasereturnsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\PurchasereturnsRepository $purchasereturn
     */
    public function __construct(PurchasereturnsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['purchasereturns']);
    }

    /**
     * @param \App\Http\Requests\Backend\Purchasereturns\ManagePurchasereturnsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManagePurchasereturnsRequest $request)
    {
        return new ViewResponse('backend.purchasereturns.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Purchasereturns\ManagePurchasereturnsRequest $request
     *
     * @return ViewResponse
     */
    public function create(ManagePurchasereturnsRequest $request, Purchasereturn $purchasereturn)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


      


        $purchasereturnCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($purchasereturnCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $purchasereturnCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '!=', null)
        ->select('id','name')->get();

        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        
        $purchasereturnSubcategories = collect(['' => 'Select'] + $subcat);


		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$suppliers = Supplier::getSelectData();
        $suppliers = collect(['' => 'Select Supplier'] + $suppliers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
		


        return new ViewResponse('backend.purchasereturns.create', ['status' => $purchasereturn->statuses, 
        'purchasereturnCategories' => $purchasereturnCategories, 
        'purchasereturnSubcategories' => $purchasereturnSubcategories, 
        'Brands' => $Brands,
        'Units' => $Units,
		'companies' => $companies,
        'branches' => $branches,
		'products' => $products,
		
		'suppliers' => $suppliers,
		'discounttype' => $purchasereturn->discounttypes, 
		'taxtypes' => $purchasereturn->taxtypes, 
		
        ]);
    }

    /**
     * @param \App\Http\Requests\Backend\Purchasereturns\StorePurchasereturnsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StorePurchasereturnsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.purchasereturns.index'), ['flash_success' => __('alerts.backend.purchasereturns.created')]);
    }

    /**
     * @param \App\Models\Purchasereturn $purchasereturn
     * @param \App\Http\Requests\Backend\Purchasereturns\ManagePurchasereturnsRequest $request
     *
     * @return \App\Http\Responses\Backend\Purchasereturns\EditResponse
     */
    public function edit(Purchasereturn $purchasereturn, ManagePurchasereturnsRequest $request)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $purchasereturnCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($purchasereturnCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $purchasereturnCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '!=', null)
        ->select('id','name')->get();

        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        
        $purchasereturnSubcategories = collect(['' => 'Select'] + $subcat);
		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$suppliers = Supplier::getSelectData();
        $suppliers = collect(['' => 'Select Supplier'] + $suppliers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
		$purchasereturnitems = Purchasereturnitem::where('purchasereturn_id',$purchasereturn->id)->get();
		
		/*foreach($purchasereturnitems as $items)
		{
			print_r($items);
			echo "<br>";
		}
		exit;
		*/


        return new EditResponse($purchasereturn, $purchasereturn->statuses, $purchasereturnCategories, $purchasereturnSubcategories, $Brands,$Units,$companies,$branches,
		                        $products,$suppliers,$purchasereturn->discounttypes,$purchasereturn->taxtypes,$purchasereturnitems);
		
		
		
		
		
		
		
    }

    /**
     * @param \App\Models\Purchasereturns\Purchasereturn $purchasereturn
     * @param \App\Http\Requests\Backend\Purchasereturns\UpdatePurchasereturnsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Purchasereturn $purchasereturn, UpdatePurchasereturnsRequest $request)
    {
        $this->repository->update($purchasereturn, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.purchasereturns.index'), ['flash_success' => __('alerts.backend.purchasereturns.updated')]);
    }

    /**
     * @param \App\Models\Purchasereturn $purchasereturn
     * @param \App\Http\Requests\Backend\Purchasereturns\ManagePurchasereturnsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Purchasereturn $purchasereturn, ManagePurchasereturnsRequest $request)
    {
        $this->repository->delete($purchasereturn);

        return new RedirectResponse(route('admin.purchasereturns.index'), ['flash_success' => __('alerts.backend.purchasereturns.deleted')]);
    }
	
	
	
	
	
	
	   public function print(Purchase $purchase, ManagePurchasereturnsRequest $request)
    {

   
   
        $purchasereturnitems = Purchasereturnitem::select(
            "purchasereturnitems.*", 
            "products.product_name"
        )
        ->leftJoin("products", "products.id", "=", "purchasereturnitems.purchasereturnitems_name")
        ->where('purchasereturn_id',$request->id)->get();
		
		
		
		
        

        $purchasereturn = Purchasereturn::select(
            "purchasereturns.*", 
            "companies.name as compnay_name",
            "branches.name as branch_name",
            "suppliers.name as supplier_name",
            "suppliers.address as supplier_address",
            "suppliers.phoneno as supplier_phoneno",
            "suppliers.email as supplier_email",
        )
        ->leftJoin("companies", "companies.id", "=", "purchasereturns.purchasereturn_company")
        ->leftJoin("branches", "branches.id", "=", "purchasereturns.purchasereturn_branch")
        ->leftJoin("suppliers", "suppliers.id", "=", "purchasereturns.purchasereturn_supplier")
        ->where('purchasereturns.id',$request->id)->first();
        

      
        


                            

		return view('backend.purchasereturns.print', [
        'purchasereturnitems' => $purchasereturnitems, 
        'purchasereturns' => $purchasereturn, 
		
        ]);
		
        
		
		
		
    }
}
