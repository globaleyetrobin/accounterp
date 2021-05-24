<?php

namespace App\Http\Requests\Backend\Sales;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSalesRequest.
 */
class StoreSalesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-sale');
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
			
			
            'sale_amount' => ['required'],
			
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
            'name.required' => 'Please insert Sale Title',
            'name.max' => 'Sale Title may not be greater than 191 characters.',
            'name.unique' => 'The sale name already taken. Please try with different name.',
        ];
    }
}
