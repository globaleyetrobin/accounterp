<?php

namespace App\Http\Responses\Backend\Employees;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Employees
     */
    protected $employee;
	protected $companies ;

    /**
     * @param \App\Models\Employees $employee
     */
    public function __construct($employee,$companies )
    {
		
        $this->Employee = $employee;
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
		
	
	   
        return view('backend.employees.edit')->with([
            'Employee' => $this->Employee,
            'companies' => $this->companies,
            
        ]);
           
    }
}
