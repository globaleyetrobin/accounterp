<?php

namespace App\Http\Requests\Backend\Sales;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateSalesRequest.
 */
class UpdateSalesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-sale');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
            'sale_no' => ['required', 'max:191'],
			
			
            'sale_amount' => ['required', 'string'],
			
			'sale_customer' => ['required'],
            
            'sale_netamount' => ['required'],
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
            'name.unique' => 'Sale name already exists, please enter a different name.',
            'name.required' => 'Please insert Sale Title',
            'name.max' => 'Sale Title may not be greater than 191 characters.',
        ];
    }
}
