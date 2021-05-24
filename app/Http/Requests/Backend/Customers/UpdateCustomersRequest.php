<?php

namespace App\Http\Requests\Backend\Customers;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateCustomersRequest.
 */
class UpdateCustomersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-customer');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:customers,name,'.optional($this->route('customer'))->id],
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
            'name.unique' => 'Customer name already exists, please enter a different name.',
            'name.required' => 'Please insert Customer Title',
			
            'name.max' => 'Customer may not be greater than 191 characters.',
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
                'description' => 'Name of the Customer.',
                'example' => 'Robin Solutions',
            ],
			'category_id' => [
                'description' => 'Name of the Company.',
                'example' => 'Robin  Solutions',
            ],
            'status' => [
                'description' => 'Status of the Customer.',
                'example' => 1,
            ],
        ];
    }
}
