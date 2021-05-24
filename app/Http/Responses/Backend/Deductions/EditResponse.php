<?php

namespace App\Http\Responses\Backend\Deductions;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogDeductions\Deduction
     */
    protected $Deduction;
	
	

    /**
     * @param \App\Models\Deductions\Deduction $Deduction
     */
    public function __construct($Deduction)
    {
        $this->Deduction = $Deduction;
		
		
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
        return view('backend.deductions.edit')
		    
            ->with('Deduction', $this->Deduction);
    }
}
