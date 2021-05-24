<?php

namespace App\Http\Responses\Backend\Purchasereturns;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    protected $purchasereturn;

    protected $status;
	
	protected $purchasereturnCategories;

	protected $purchasereturnSubcategories;

    protected $Brands;
    
	protected $Units;
	
	
	protected $companies;
    
	protected $branches;
	
	
	protected $products;
    
	protected $suppliers;
	
	protected $discounttype;
    
	protected $taxtypes;
	
	protected $purchasereturnitems;
	
	
	 
   
	
	
	

    public function __construct($purchasereturn, $status, $purchasereturnCategories,$purchasereturnSubcategories, $Brands,$Units,$companies,$branches,
		                        $products,$suppliers, $discounttype, $taxtypes,$purchasereturnitems)
    {
        $this->purchasereturn = $purchasereturn;
        $this->status = $status;
		$this->purchasereturnCategories = $purchasereturnCategories;

		$this->purchasereturnSubcategories = $purchasereturnSubcategories;


        $this->brand = $Brands;
		$this->unit = $Units;
		
		$this->companies = $companies;
		$this->branches = $branches;
		
		$this->products = $products;
		$this->suppliers = $suppliers;
		
		$this->discounttype = $discounttype;
		$this->taxtypes = $taxtypes;
		$this->purchasereturnitems=$purchasereturnitems;
		
        
    }

    public function toResponse($request)
    {
		
       /* $selectedCategories = $this->purchasereturn->categories->pluck('id')->toArray();
		
        $selectedtags = $this->purchasereturn->tags->pluck('id')->toArray();
		*/
		
	
  
        return view('backend.purchasereturns.edit')->with([
		
		
            'purchasereturn'             => $this->purchasereturn,
            
			'status'               => $this->status, 
			'purchasereturnCategories'   => $this->purchasereturnCategories, 

			'purchasereturnSubcategories'   => $this->purchasereturnSubcategories, 

			
			'Brands'               => $this->Brands,
			'Units'                => $this->Units,
			'companies'            => $this->companies,
			'branches'             => $this->branches,
			'products'             => $this->products,
			
			'suppliers'           => $this->suppliers,
			'discounttype'        => $this->discounttype, 
			'taxtypes'            => $this->taxtypes,
			'purchasereturnitems'       => $this->purchasereturnitems,
			
			
			
        ]);
    }
}
