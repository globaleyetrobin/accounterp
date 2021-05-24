<?php

namespace App\Http\Requests\Backend\Allowances;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreAllowancesRequest.
 */
class StoreAllowancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-allowance');
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
            'short_name' => ['required', 'max:191', 'unique:Allowances,short_name'],
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
            'name.required' => 'Allowance name must required',
            'short_name.unique' => 'Allowance short name already exist.',
            'name.max' => 'Allowance may not be greater than 191 characters.',
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
                'description' => 'Name of the Allowance.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the Allowance.',
                'example' => 1,
            ],
        ];
    }
}
