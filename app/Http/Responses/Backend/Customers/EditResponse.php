<?php

namespace App\Http\Responses\Backend\Customers;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Customers
     */
    protected $customer;
	protected $companies ;

    /**
     * @param \App\Models\Customers $customer
     */
    public function __construct($customer,$companies )
    {
		
        $this->Customer = $customer;
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
		
	
	   
        return view('backend.Customers.edit')->with([
            'Customer' => $this->Customer,
            'companies' => $this->companies,
            
        ]);
           
    }
}
