<?php

namespace App\Http\Requests\Backend\Suppliers;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateSuppliersRequest.
 */
class UpdateSuppliersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-supplier');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:suppliers,name,'.optional($this->route('supplier'))->id],
			'category_id.required' => 'Company name must required',
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
            'name.unique' => 'Supplier name already exists, please enter a different name.',
            'name.required' => 'Please insert Supplier Title',
			
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
                'example' => 'Robin Solutions',
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
