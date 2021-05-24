<?php

namespace App\Http\Responses\Backend\Subcategory;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Subcategory
     */
    protected $Subcategory;
	
	protected $subcatlist;

    /**
     * @param \App\Models\BlogCategories\Subcategory $Subcategory
     */
    public function __construct($Subcategory, $subcatlist)
    {
        $this->Subcategory = $Subcategory;
		
		$this->subcatlist = $subcatlist;
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
        return view('backend.subcategories.edit')
		    ->with('catlist', $this->subcatlist)
            ->with('Subcategory', $this->Subcategory);
    }
}
