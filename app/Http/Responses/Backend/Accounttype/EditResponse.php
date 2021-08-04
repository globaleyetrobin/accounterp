<?php

namespace App\Http\Responses\Backend\Accounttype;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Accounttype
     */
    protected $Accounttype;
	
	protected $accounttypelist;

    /**
     * @param \App\Models\BlogCategories\Accounttype $Accounttype
     */
    public function __construct($Accounttype, $accounttypelist)
    {
        $this->Accounttype = $Accounttype;
		
		$this->accounttypelist = $accounttypelist;
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
        return view('backend.accounttypes.edit')
		    ->with('accounttypelist', $this->accounttypelist)
            ->with('Accounttype', $this->Accounttype);
    }
}
