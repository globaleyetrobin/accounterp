<?php

namespace App\Http\Responses\Backend\Allowances;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogAllowances\Allowance
     */
    protected $Allowance;
	
	

    /**
     * @param \App\Models\Allowances\Allowance $Allowance
     */
    public function __construct($Allowance)
    {
        $this->Allowance = $Allowance;
		
		
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
        return view('backend.allowances.edit')
		    
            ->with('Allowance', $this->Allowance);
    }
}
