<?php

namespace App\Http\Responses\Backend\Sales;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    protected $sale;

    protected $status;
	
	 protected $saleCategories;

	 protected $saleSubcategories;

    protected $Brands;
    
	protected $Units;
	
	
	protected $companies;
    
	protected $branches;
	
	
	protected $products;
    
	protected $customers;
	
	protected $discounttype;
    
	protected $taxtypes;
	
	protected $saleitems;
	
	
	 
   
	
	
	

    public function __construct($sale, $status, $saleCategories,$saleSubcategories, $Brands,$Units,$companies,$branches,
		                        $products,$customers, $discounttype, $taxtypes,$saleitems)
    {
        $this->sale = $sale;
        $this->status = $status;
		$this->saleCategories = $saleCategories;

		$this->saleSubcategories = $saleSubcategories;



        $this->brand = $Brands;
		$this->unit = $Units;
		
		$this->companies = $companies;
		$this->branches = $branches;
		
		$this->products = $products;
		$this->customers = $customers;
		
		$this->discounttype = $discounttype;
		$this->taxtypes = $taxtypes;
		$this->saleitems=$saleitems;
		
        
    }

    public function toResponse($request)
    {
		
       /* $selectedCategories = $this->sale->categories->pluck('id')->toArray();
		
        $selectedtags = $this->sale->tags->pluck('id')->toArray();
		*/
		
	
  
        return view('backend.sales.edit')->with([
		
		
            'sale'             => $this->sale,
            
			'status'               => $this->status, 
			'saleCategories'   => $this->saleCategories, 
			'saleSubcategories'   => $this->saleSubcategories, 
			'Brands'               => $this->Brands,
			'Units'                => $this->Units,
			'companies'            => $this->companies,
			'branches'             => $this->branches,
			'products'             => $this->products,
			
			'customers'           => $this->customers,
			'discounttype'        => $this->discounttype, 
			'taxtypes'            => $this->taxtypes,
			'saleitems'       => $this->saleitems,
			
			
			
        ]);
    }
}
