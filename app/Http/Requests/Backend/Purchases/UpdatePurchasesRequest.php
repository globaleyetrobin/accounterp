<?php

namespace App\Http\Requests\Backend\Purchases;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdatePurchasesRequest.
 */
class UpdatePurchasesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-purchase');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
            'purchase_no' => ['required', 'max:191'],
			
			
            'purchase_amount' => ['required', 'string'],
			
			'purchase_supplier' => ['required'],
            
            'purchase_netamount' => ['required'],
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
            'name.unique' => 'Purchase name already exists, please enter a different name.',
            'name.required' => 'Please insert Purchase Title',
            'name.max' => 'Purchase Title may not be greater than 191 characters.',
        ];
    }
}
