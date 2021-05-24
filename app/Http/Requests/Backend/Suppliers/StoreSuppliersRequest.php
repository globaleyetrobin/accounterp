<?php

namespace App\Http\Requests\Backend\Suppliers;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSuppliersRequest.
 */
class StoreSuppliersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-supplier');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:suppliers,name'],
			'category_id' => ['integer'],
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
            'name.required' => 'Supplier name must required',
			//'category_id.required' => 'Company name must required',
            'name.unique' => 'Supplier name already exist.',
            'name.max' => 'Supplier may not be greater than 191 characters.',
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
                'description' => 'Name of the Supplier.',
                'example' => 'Robin  Solutions',
            ],
			'category_id' => [
                'description' => 'Name of the Company.',
                'example' => 'Robin  Solutions',
            ],
            'status' => [
                'description' => 'Status of the Supplier.',
                'example' => 1,
            ],
        ];
    }
}
