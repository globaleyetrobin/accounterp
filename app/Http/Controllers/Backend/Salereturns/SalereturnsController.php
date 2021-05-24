<?php

namespace App\Http\Controllers\Backend\Salereturns;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Salereturns\ManageSalereturnsRequest;
use App\Http\Requests\Backend\Salereturns\StoreSalereturnsRequest;
use App\Http\Requests\Backend\Salereturns\UpdateSalereturnsRequest;
use App\Http\Responses\Backend\Salereturns\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Salereturn;

use App\Models\Salereturnitem;


use App\Models\Category;

use App\Models\Brand;

use App\Models\Unit;

use App\Models\Company;

use App\Models\Branch;

use App\Models\Customer;





use App\Models\Product;


use App\Repositories\Backend\SalereturnsRepository;
use Illuminate\Support\Facades\View;

class SalereturnsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\SalereturnsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\SalereturnsRepository $salereturn
     */
    public function __construct(SalereturnsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['salereturns']);
    }

    /**
     * @param \App\Http\Requests\Backend\Salereturns\ManageSalereturnsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageSalereturnsRequest $request)
    {
        return new ViewResponse('backend.salereturns.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Salereturns\ManageSalereturnsRequest $request
     *
     * @return ViewResponse
     */
    public function create(ManageSalereturnsRequest $request, Salereturn $salereturn)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $salereturnCategories = Category::getSelectData();

        $salereturnCategories = collect(['' => 'Select Category'] + $salereturnCategories);
		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$customers = Customer::getSelectData();
        $customers = collect(['' => 'Select Customer'] + $customers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
		


        return new ViewResponse('backend.salereturns.create', ['status' => $salereturn->statuses, 
        'salereturnCategories' => $salereturnCategories, 
        'Brands' => $Brands,
        'Units' => $Units,
		'companies' => $companies,
        'branches' => $branches,
		'products' => $products,
		
		'customers' => $customers,
		'discounttype' => $salereturn->discounttypes, 
		'taxtypes' => $salereturn->taxtypes, 
		
        ]);
    }

    /**
     * @param \App\Http\Requests\Backend\Salereturns\StoreSalereturnsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreSalereturnsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.salereturns.index'), ['flash_success' => __('alerts.backend.salereturns.created')]);
    }

    /**
     * @param \App\Models\Salereturn $salereturn
     * @param \App\Http\Requests\Backend\Salereturns\ManageSalereturnsRequest $request
     *
     * @return \App\Http\Responses\Backend\Salereturns\EditResponse
     */
    public function edit(Salereturn $salereturn, ManageSalereturnsRequest $request)
    {
        $Brands = Brand::getSelectData();

        $Brands = collect(['' => 'Select Brand'] + $Brands);

        $Units = Unit::getSelectData();

        $Units = collect(['' => 'Select Unit'] + $Units);


        $salereturnCategories = Category::getSelectData();

        $salereturnCategories = collect(['' => 'Select Category'] + $salereturnCategories);
		
		$companies = Company::getSelectData();
        $companies = collect(['' => 'Select Company'] + $companies);


        $branches = Branch::getSelectData();
        $branches = collect(['' => 'Select Branch'] + $branches);
		
		
		$customers = Customer::getSelectData();
        $customers = collect(['' => 'Select Customer'] + $customers);
		
		$products = Product::getSelectData('product_name');
        $products = collect(['' => 'Select Product'] + $products);
		
		$salereturnitems = Salereturnitem::where('salereturn_id',$salereturn->id)->get();
		
		/*foreach($salereturnitems as $items)
		{
			print_r($items);
			echo "<br>";
		}
		exit;
		*/
		
		  


        return new EditResponse($salereturn, $salereturn->statuses, $salereturnCategories, $Brands,$Units,$companies,$branches,
		                        $products,$customers,$salereturn->discounttypes,$salereturn->taxtypes,$salereturnitems,$salereturn->salesreturntypes);
		
		
		
		
		
		
		
    }

    /**
     * @param \App\Models\Salereturns\Salereturn $salereturn
     * @param \App\Http\Requests\Backend\Salereturns\UpdateSalereturnsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Salereturn $salereturn, UpdateSalereturnsRequest $request)
    {
        $this->repository->update($salereturn, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.salereturns.index'), ['flash_success' => __('alerts.backend.salereturns.updated')]);
    }

    /**
     * @param \App\Models\Salereturn $salereturn
     * @param \App\Http\Requests\Backend\Salereturns\ManageSalereturnsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Salereturn $salereturn, ManageSalereturnsRequest $request)
    {
        $this->repository->delete($salereturn);

        return new RedirectResponse(route('admin.salereturns.index'), ['flash_success' => __('alerts.backend.salereturns.deleted')]);
    }
}
