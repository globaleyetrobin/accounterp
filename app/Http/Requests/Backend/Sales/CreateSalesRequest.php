<?php

namespace App\Http\Requests\Backend\Sales;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateSalesRequest.
 */
class CreateSalesRequest extends FormRequest
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
            'sale_no' => 'required|max:191',
            'sale_amount' => 'required',
           
            'sale_customer' => 'required',
            'sale_netamount' => 'required',
           
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
            'sale_no.required' => 'Please insert Sale Title',
            'name.max' => 'Sale Title may not be greater than 191 characters.',
            //'name.unique' => 'The sale name already taken. Please try with different name.',
        ];
    }
}
