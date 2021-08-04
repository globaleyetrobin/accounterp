<?php

namespace App\Http\Requests\Backend\Expensecategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreExpensecategoriesRequest.
 */
class StoreExpensecategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-expensecategory');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:expensecategories,name'],
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
            'name.required' => 'Expensecategory name must required',
            'name.unique' => 'Expensecategory name already exist.',
            'name.max' => 'Expensecategory may not be greater than 191 characters.',
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
                'description' => 'Name of the expensecategory.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the expensecategory.',
                'example' => 1,
            ],
        ];
    }
}
