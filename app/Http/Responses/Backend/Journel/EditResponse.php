<?php

namespace App\Http\Responses\Backend\Journel;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Journel
     */
    protected $Journel;
	
	protected $catlist;

    protected $subcatlist;

    protected $accounttype;

     protected $creditdebits;

    /**
     * @param \App\Models\BlogCategories\Journel $Journel
     */
    public function __construct($Journel, $catlist,$subcatlist,$accounttype,$creditdebits)
    {
        $this->Journel = $Journel;
		
		$this->catlist = $catlist;

        $this->subcatlist =$subcatlist;

        $this->accounttype =$accounttype;

        $this->creditdebits =$creditdebits;
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
        
        
        return view('backend.journels.edit')
		    ->with('catlist', $this->catlist)
            ->with('subcatlist', $this->subcatlist)
            ->with('accounttype', $this->accounttype)
            ->with('creditdebits', $this->creditdebits)
            ->with('Journel', $this->Journel);
    }
}
