<?php

namespace App\Http\Responses\Backend\Expensecategory;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogExpensecategories\Expensecategory
     */
    protected $Expensecategory;
	
	protected $catlist;

    /**
     * @param \App\Models\BlogExpensecategories\Expensecategory $Expensecategory
     */
    public function __construct($Expensecategory, $catlist)
    {
        $this->Expensecategory = $Expensecategory;
		
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
        return view('backend.expensecategories.edit')
		    ->with('catlist', $this->catlist)
            ->with('Expensecategory', $this->Expensecategory);
    }
}
