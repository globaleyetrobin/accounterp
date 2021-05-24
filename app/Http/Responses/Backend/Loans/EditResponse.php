<?php

namespace App\Http\Responses\Backend\Loans;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogLoans\Loan
     */
    protected $Loan;
	protected $employee;
	
	

    /**
     * @param \App\Models\Loans\Loan $Loan
     */
    public function __construct($Loan, $employee)
    {
        $this->Loan = $Loan;
		
		$this->employee = $employee;
		
		
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
        return view('backend.loans.edit')
		->with([
            'employee' => $this->employee,
            'Loan' => $this->Loan,
            
        ]);
		    
          
			
    }
}
