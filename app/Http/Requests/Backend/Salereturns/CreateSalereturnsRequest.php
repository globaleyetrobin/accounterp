<?php

namespace App\Http\Requests\Backend\Salereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateSalereturnsRequest.
 */
class CreateSalereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-salereturn');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'salereturn_no' => 'required|max:191',
            'salereturn_amount' => 'required',
           
            'salereturn_customer' => 'required',
            'salereturn_netamount' => 'required',
           
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
            'salereturn_no.required' => 'Please insert Salereturn Title',
            'name.max' => 'Salereturn Title may not be greater than 191 characters.',
            //'name.unique' => 'The salereturn name already taken. Please try with different name.',
        ];
    }
}
