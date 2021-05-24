<?php

namespace App\Http\Requests\Backend\Purchasereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StorePurchasereturnsRequest.
 */
class StorePurchasereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-purchasereturn');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'purchasereturn_no' => ['required', 'max:191'],
			
			
            'purchasereturn_amount' => ['required'],
			
			'purchasereturn_supplier' => ['required'],
            
            'purchasereturn_netamount' => ['required'],
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
            'name.required' => 'Please insert Purchasereturn Title',
            'name.max' => 'Purchasereturn Title may not be greater than 191 characters.',
            'name.unique' => 'The purchasereturn name already taken. Please try with different name.',
        ];
    }
}
