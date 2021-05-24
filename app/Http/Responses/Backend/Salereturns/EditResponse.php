<?php

namespace App\Http\Responses\Backend\Salereturns;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    protected $salereturn;

    protected $status;
	
	 protected $salereturnCategories;

    protected $Brands;
    
	protected $Units;
	
	
	protected $companies;
    
	protected $branches;
	
	
	protected $products;
    
	protected $customers;
	
	protected $discounttype;
    
	protected $taxtypes;
	
	protected $salereturnitems;
	
	protected $salesreturntype ;
	
	
	 
   
	
	
	

    public function __construct($salereturn, $status, $salereturnCategories, $Brands,$Units,$companies,$branches,
		                        $products,$customers, $discounttype, $taxtypes,$salereturnitems, $salesreturntype)
    {
        $this->salereturn = $salereturn;
        $this->status = $status;
		$this->salereturnCategories = $salereturnCategories;
        $this->brand = $Brands;
		$this->unit = $Units;
		
		$this->companies = $companies;
		$this->branches = $branches;
		
		$this->products = $products;
		$this->customers = $customers;
		
		$this->discounttype = $discounttype;
		$this->taxtypes = $taxtypes;
		$this->salereturnitems=$salereturnitems;
		
		$this->salesreturntype=$salesreturntype;
		
        
    }

    public function toResponse($request)
    {
		
       /* $selectedCategories = $this->salereturn->categories->pluck('id')->toArray();
		
        $selectedtags = $this->salereturn->tags->pluck('id')->toArray();
		*/
		
	
  
        return view('backend.salereturns.edit')->with([
		
		
            'salereturn'             => $this->salereturn,
            
			'status'               => $this->status, 
			'salereturnCategories'   => $this->salereturnCategories, 
			'Brands'               => $this->Brands,
			'Units'                => $this->Units,
			'companies'            => $this->companies,
			'branches'             => $this->branches,
			'products'             => $this->products,
			
			'customers'           => $this->customers,
			'discounttype'        => $this->discounttype, 
			'taxtypes'            => $this->taxtypes,
			'salereturnitems'       => $this->salereturnitems,
			'salesreturntype'       => $this->salesreturntype,
			
			
			
        ]);
    }
}
