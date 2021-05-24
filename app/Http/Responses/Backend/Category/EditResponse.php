<?php

namespace App\Http\Responses\Backend\Category;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Category
     */
    protected $Category;
	
	protected $catlist;

    /**
     * @param \App\Models\BlogCategories\Category $Category
     */
    public function __construct($Category, $catlist)
    {
        $this->Category = $Category;
		
		$this->catlist = $catlist;
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
        return view('backend.categories.edit')
		    ->with('catlist', $this->catlist)
            ->with('Category', $this->Category);
    }
}
