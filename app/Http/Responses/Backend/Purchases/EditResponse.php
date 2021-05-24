<?php

namespace App\Http\Responses\Backend\Purchases;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    protected $purchase;

    protected $status;
	
	 protected $purchaseCategories;

    protected $Brands;
    
	protected $Units;
	
	
	protected $companies;
    
	protected $branches;
	
	
	protected $products;
    
	protected $suppliers;
	
	protected $discounttype;
    
	protected $taxtypes;
	
	protected $purchaseitems;
	
	
	 
   
	
	
	

    public function __construct($purchase, $status, $purchaseCategories,$purchaseSubcategories, $Brands,$Units,$companies,$branches,
		                        $products,$suppliers, $discounttype, $taxtypes,$purchaseitems)
    {
        $this->purchase = $purchase;
        $this->status = $status;
		$this->purchaseCategories = $purchaseCategories;

		$this->purchaseSubcategories = $purchaseSubcategories;


        $this->brand = $Brands;
		$this->unit = $Units;
		
		$this->companies = $companies;
		$this->branches = $branches;
		
		$this->products = $products;
		$this->suppliers = $suppliers;
		
		$this->discounttype = $discounttype;
		$this->taxtypes = $taxtypes;
		$this->purchaseitems=$purchaseitems;
		
        
    }

    public function toResponse($request)
    {
		
       /* $selectedCategories = $this->purchase->categories->pluck('id')->toArray();
		
        $selectedtags = $this->purchase->tags->pluck('id')->toArray();
		*/
		
	
  
        return view('backend.purchases.edit')->with([
		
		
            'purchase'             => $this->purchase,
            
			'status'               => $this->status, 
			'purchaseCategories'   => $this->purchaseCategories, 
			'purchaseSubcategories'   => $this->purchaseSubcategories, 

			'Brands'               => $this->Brands,
			'Units'                => $this->Units,
			'companies'            => $this->companies,
			'branches'             => $this->branches,
			'products'             => $this->products,
			
			'suppliers'           => $this->suppliers,
			'discounttype'        => $this->discounttype, 
			'taxtypes'            => $this->taxtypes,
			'purchaseitems'       => $this->purchaseitems,
			
			
			
        ]);
    }
}
