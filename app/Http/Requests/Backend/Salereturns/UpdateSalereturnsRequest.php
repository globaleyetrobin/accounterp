<?php

namespace App\Http\Requests\Backend\Salereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateSalereturnsRequest.
 */
class UpdateSalereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-salereturn');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
            'salereturn_no' => ['required', 'max:191'],
			
			
            'salereturn_amount' => ['required', 'string'],
			
			'salereturn_customer' => ['required'],
            
            'salereturn_netamount' => ['required'],
            'status' => ['integer', 'between:0,3'],
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique' => 'Salereturn name already exists, please enter a different name.',
            'name.required' => 'Please insert Salereturn Title',
            'name.max' => 'Salereturn Title may not be greater than 191 characters.',
        ];
    }
}
