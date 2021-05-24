<?php

namespace App\Http\Responses\Backend\Products;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    protected $product;

    protected $status;

    protected $Brands;
    
	protected $Units;
	 
    protected $productCategories;
	
    protected $productSubcategories ;
	
	
	 

    public function __construct($product, $status, $Brands, $Units,$productCategories , $productSubcategories)
    {
        $this->product = $product;
        $this->status = $status;
        $this->brand = $Brands;
		$this->unit = $Units;
		
        $this->productCategories = $productCategories;

        $this->productSubcategories = $productSubcategories;
    }

    public function toResponse($request)
    {
		
       /* $selectedCategories = $this->product->categories->pluck('id')->toArray();
		
        $selectedtags = $this->product->tags->pluck('id')->toArray();
		*/
		
	
  
        return view('backend.products.edit')->with([
            'product' => $this->product,
            'productCategories' => $this->productCategories,

            'productSubcategories' => $this->productSubcategories,
            
             'Brands' => $this->brand,
              'Units' => $this->unit,
            'status' => $this->status,
        ]);
    }
}
