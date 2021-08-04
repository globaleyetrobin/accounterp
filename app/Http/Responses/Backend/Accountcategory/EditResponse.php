<?php

namespace App\Http\Responses\Backend\Accountcategory;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Accountcategory
     */
    protected $Accountcategory;
	
	protected $accountcatlist;
    protected $creditdebits;

    /**
     * @param \App\Models\BlogCategories\Accountcategory $Accountcategory
     */
    public function __construct($Accountcategory, $accountcatlist, $creditdebits)
    {
        $this->Accountcategory = $Accountcategory;
		
		$this->accountcatlist = $accountcatlist;

        $this->creditdebits = $creditdebits;
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
        return view('backend.accountcategories.edit')
		    ->with('catlist', $this->accountcatlist)
             ->with('creditdebits', $this->creditdebits)
            ->with('Accountcategory', $this->Accountcategory);
    }
}
