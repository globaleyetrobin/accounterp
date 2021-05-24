<?php

namespace App\Http\Requests\Backend\Loans;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreLoansRequest.
 */
class StoreLoansRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-loan');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
		    'name' => ['required'],  
            'employee_id' => ['required'],
			'amount' => ['required'],
			'duration' => ['required'],
			'emi' => ['required'],
			'interest' => ['required'],
			'total_interest' => ['required'],
			
			'total_amount' => ['required'],
			
			'startdate' => ['required'],
			
			'enddate' => ['required'],
			
			
            'status' => ['boolean'],
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Loan name must required',
			
			
			'employee_id.required' => 'Employee must required',
			
			
			'amount.required' => 'Amount must required',
			
			
			'duration.required' => 'Duration must required',
			
			
			'emi.required' => 'Emi must required',
			
			
			'interest.required' => 'Interest must required',
			
			
			'total_interest.required' => 'Total interest must required',
			
			'total_amount.required' => 'Total Amount must required',
			
			'startdate.required' => 'Start Date must required',
			
			'enddate.required' => 'End Date must required',
			
           
            'name.max' => 'Loan may not be greater than 191 characters.',
        ];
    }

    /**
     * Body Parameters : Used by scribe to generate doc.
     *
     * @return array
     */
    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'Name of the Loan.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the Loan.',
                'example' => 1,
            ],
        ];
    }
}
