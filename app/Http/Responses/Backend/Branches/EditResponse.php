<?php

namespace App\Http\Responses\Backend\Branches;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Branches
     */
    protected $branch;
	protected $companies ;

    /**
     * @param \App\Models\Branches $branch
     */
    public function __construct($branch,$companies )
    {
		
        $this->Branch = $branch;
		$this->companies = $companies;
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
		
	
	   
        return view('backend.Branches.edit')->with([
            'Branch' => $this->Branch,
            'companies' => $this->companies,
            
        ]);
           
    }
}
