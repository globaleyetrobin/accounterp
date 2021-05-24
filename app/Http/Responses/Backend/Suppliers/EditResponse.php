<?php

namespace App\Http\Responses\Backend\Suppliers;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Suppliers
     */
    protected $supplier;
	protected $companies ;

    /**
     * @param \App\Models\Suppliers $supplier
     */
    public function __construct($supplier,$companies )
    {
		
        $this->Supplier = $supplier;
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
		
	
	   
        return view('backend.Suppliers.edit')->with([
            'Supplier' => $this->Supplier,
            'companies' => $this->companies,
            
        ]);
           
    }
}
