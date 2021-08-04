<?php

namespace App\Http\Responses\Backend\Accountsubcategory;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Accountsubcategory
     */
    protected $Accountsubcategory;
	
	protected $accountcatlist;
    protected $creditdebits;

    /**
     * @param \App\Models\BlogCategories\Accountsubcategory $Accountsubcategory
     */
    public function __construct($Accountsubcategory, $accountcatlist, $creditdebits)
    {
        $this->Accountsubcategory = $Accountsubcategory;
		
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
        return view('backend.accountsubcategories.edit')
		    ->with('catlist', $this->accountcatlist)
             ->with('creditdebits', $this->creditdebits)
            ->with('Accountsubcategory', $this->Accountsubcategory);
    }
}
