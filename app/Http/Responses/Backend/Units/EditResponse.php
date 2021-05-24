<?php

namespace App\Http\Responses\Backend\Units;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogUnits\Unit
     */
    protected $Unit;
	
	

    /**
     * @param \App\Models\Units\Unit $Unit
     */
    public function __construct($Unit)
    {
        $this->Unit = $Unit;
		
		
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
        return view('backend.units.edit')
		    
            ->with('Unit', $this->Unit);
    }
}
