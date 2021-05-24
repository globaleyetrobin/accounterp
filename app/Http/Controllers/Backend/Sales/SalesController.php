<?php

namespace App\Http\Controllers\Backend\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sales\ManageSalesRequest;
use App\Http\Requests\Backend\Sales\StoreSalesRequest;
use App\Http\Requests\Backend\Sales\UpdateSalesRequest;
use App\Http\Responses\Backend\Sales\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Sale;

use App\Models\Saleitem;


use App\Models\Category;

use App\Models\Brand;

use App\Models\Unit;

use App\Models\Company;

use App\Models\Branch;

use App\Models\Customer;





use App\Models\Product;


use App\Repositories\Backend\SalesRepository;
use Illuminate\Support\Facades\View;

class SalesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\SalesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\SalesRepository $sale
     */
    public function __construct(SalesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['sales']);
    }

    /**
     * @param \App\Http\Requests\Backend\Sales\ManageSalesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageSalesRequest $request)
    {
        return new ViewResponse('backend.sales.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Sales\ManageSalesRequest $request
     *
     * @return ViewResponse
     */
    public function create(ManageSalesRequest $request, Sale $sale)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


      


        $saleCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($saleCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $saleCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '!=', null)
        ->select('id','name')->get();

        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        
        $saleSubcategories = collect(['' => 'Select'] + $subcat);


		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$customers = Customer::getSelectData();
        $customers = collect(['' => 'Select Customer'] + $customers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
		


        return new ViewResponse('backend.sales.create', ['status' => $sale->statuses, 
        'saleCategories' => $saleCategories, 

        'saleSubcategories' => $saleSubcategories, 


        'Brands' => $Brands,
        'Units' => $Units,
		'companies' => $companies,
        'branches' => $branches,
		'products' => $products,
		
		'customers' => $customers,
		'discounttype' => $sale->discounttypes, 
		'taxtypes' => $sale->taxtypes, 
		
        ]);
    }

    /**
     * @param \App\Http\Requests\Backend\Sales\StoreSalesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreSalesRequest $request)
    {
        $sales_id=$this->repository->create($request->except(['_token', '_method']));
		
		
		$id=$sales_id->id;
		
		
		
		

        return new RedirectResponse(route('admin.sales.salesprint', $id), ['flash_success' => __('alerts.backend.sales.created')]);
    }

    /**
     * @param \App\Models\Sale $sale
     * @param \App\Http\Requests\Backend\Sales\ManageSalesRequest $request
     *
     * @return \App\Http\Responses\Backend\Sales\EditResponse
     */
    public function edit(Sale $sale, ManageSalesRequest $request)
    {
        
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $saleCategories = Category::where('categories.parent_id', '=', null)
        ->select('id','name')->get();

        foreach ($saleCategories as $id => $item) {
            $categories[$item['id']] = $item['name'];
        }

        
        $saleCategories = collect(['' => 'Select'] + $categories);


        $subcategories = Category::where('categories.parent_id', '!=', null)
        ->select('id','name')->get();

        foreach ($subcategories as $id => $item) {
            $subcat[$item['id']] = $item['name'];
        }

        
        $saleSubcategories = collect(['' => 'Select'] + $subcat);
		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$customers = Customer::getSelectData();
        $customers = collect(['' => 'Select Customer'] + $customers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
		$saleitems = Saleitem::where('sale_id',$sale->id)->get();

        
		/*foreach($saleitems as $items)
		{
			print_r($items);
			echo "<br>";
		}
		exit;
		*/


        return new EditResponse($sale, $sale->statuses, $saleCategories, $saleSubcategories,$Brands,$Units,$companies,$branches,
		                        $products,$customers,$sale->discounttypes,$sale->taxtypes,$saleitems);
		
		
		
		
		
		
		
    }



    

    public function salesretrunss(ManageSalesRequest $request, Sale $sale)
    {
        return view('backend.auth.user.show')
            ->withUser($sale);
    }

    public function salesretrun(ManageSalesRequest $request, Sale $sale)
    {

      
      

        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $saleCategories = Category::getSelectData();

        $saleCategories = collect(['' => 'Select Category'] + $saleCategories);
		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$customers = Customer::getSelectData();
        $customers = collect(['' => 'Select Customer'] + $customers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
       
		//$saleitems = Saleitem::where('sale_id',$request->id)->get();


        $saleitems = Saleitem::select(
            "saleitems.*", 
            "products.product_name"
        )
        ->leftJoin("products", "products.id", "=", "saleitems.saleitems_name")
        ->where('sale_id',$request->id)->get();






        $sales = Sale::where('id',$request->id)->get();



        $sales = Sale::select(
            "sales.*", 
            "companies.name as compnay_name",
            "branches.name as branch_name",
            "customers.name as company_name",
        )
        ->leftJoin("companies", "companies.id", "=", "sales.sale_company")
        ->leftJoin("branches", "branches.id", "=", "sales.sale_branch")
        ->leftJoin("customers", "customers.id", "=", "sales.sale_customer")
        ->where('sales.id',$request->id)->first();
        

      
        


                            

		return view('backend.sales.salesreturn', ['status' => $sale->statuses, 
        'saleCategories' => $saleCategories, 
        'Brands' => $Brands,
        'Units' => $Units,
		'companies' => $companies,
        'branches' => $branches,
		'products' => $products,
		
		'customers' => $customers,
		'discounttype' => $sale->discounttypes, 

        'salesreturntype' => $sale->salesreturntypes, 


		'taxtypes' => $sale->taxtypes, 
        'saleitems' => $saleitems, 
        'sales' => $sales, 
		
        ]);
		
        
		
		
		
    }













    public function salesprint(ManageSalesRequest $request, Sale $sale)
    {

      
      

        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $saleCategories = Category::getSelectData();

        $saleCategories = collect(['' => 'Select Category'] + $saleCategories);
		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$customers = Customer::getSelectData();
        $customers = collect(['' => 'Select Customer'] + $customers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
       
		//$saleitems = Saleitem::where('sale_id',$request->id)->get();


        $saleitems = Saleitem::select(
            "saleitems.*", 
            "products.product_name"
        )
        ->leftJoin("products", "products.id", "=", "saleitems.saleitems_name")
        ->where('sale_id',$request->id)->get();






        $sales = Sale::where('id',$request->id)->get();



        $sales = Sale::select(
            "sales.*", 
            "companies.name as compnay_name",
            "branches.name as branch_name",
            "customers.name as customer_name",
            "customers.address as customer_address",
            "customers.phoneno as customer_phoneno",
            "customers.email as customer_email",
        )
        ->leftJoin("companies", "companies.id", "=", "sales.sale_company")
        ->leftJoin("branches", "branches.id", "=", "sales.sale_branch")
        ->leftJoin("customers", "customers.id", "=", "sales.sale_customer")
        ->where('sales.id',$request->id)->first();
        

      
        


                            

		return view('backend.sales.salesprint', ['status' => $sale->statuses, 
        'saleCategories' => $saleCategories, 
        'Brands' => $Brands,
        'Units' => $Units,
		'companies' => $companies,
        'branches' => $branches,
		'products' => $products,
		
		'customers' => $customers,
		'discounttype' => $sale->discounttypes, 

        'salesreturntype' => $sale->salesreturntypes, 


		'taxtypes' => $sale->taxtypes, 
        'saleitems' => $saleitems, 
        'sales' => $sales, 
		
        ]);
		
        
		
		
		
    }












    /**
     * @param \App\Models\Sales\Sale $sale
     * @param \App\Http\Requests\Backend\Sales\UpdateSalesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Sale $sale, UpdateSalesRequest $request)
    {
        $this->repository->update($sale, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.sales.index'), ['flash_success' => __('alerts.backend.sales.updated')]);
    }

    /**
     * @param \App\Models\Sale $sale
     * @param \App\Http\Requests\Backend\Sales\ManageSalesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Sale $sale, ManageSalesRequest $request)
    {
        $this->repository->delete($sale);

        return new RedirectResponse(route('admin.sales.index'), ['flash_success' => __('alerts.backend.sales.deleted')]);
    }
}
