<?php

namespace App\Http\Responses\Backend\Expense;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Expense
     */
    protected $Expense;
	
	protected $expenselist;

    /**
     * @param \App\Models\BlogCategories\Expense $Expense
     */
    public function __construct($Expense, $expenselist)
    {
        $this->Expense = $Expense;
		
		$this->expenselist = $expenselist;
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
        

        return view('backend.expenses.edit')
		    ->with('catlist', $this->expenselist)
            ->with('Expense', $this->Expense);
    }
}
