<?php

namespace App\Http\Responses\Backend\Brands;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Blogbrands\Brand
     */
    protected $Brand;
	
	

    /**
     * @param \App\Models\Blogbrands\Brand $Brand
     */
    public function __construct($Brand)
    {
        $this->Brand = $Brand;
		
		
    }

    /**
     * toReponse.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.brands.edit')
		    
            ->with('Brand', $this->Brand);
    }
}
