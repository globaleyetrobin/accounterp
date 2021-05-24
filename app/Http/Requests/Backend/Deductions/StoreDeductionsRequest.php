<?php

namespace App\Http\Requests\Backend\Deductions;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreDeductionsRequest.
 */
class StoreDeductionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-deduction');
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
            'short_name' => ['required', 'max:191', 'unique:Deductions,short_name'],
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
            'name.required' => 'Deduction name must required',
            'short_name.unique' => 'Deduction short name already exist.',
            'name.max' => 'Deduction may not be greater than 191 characters.',
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
                'description' => 'Name of the Deduction.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the Deduction.',
                'example' => 1,
            ],
        ];
    }
}
