<?php

namespace App\Http\Requests\Backend\Subcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreSubcategoriesRequest.
 */
class StoreSubcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-subcategory');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:categories,name'],
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
            'name.required' => 'Sub Category name must required',
            'name.unique' => 'Sub Category name already exist.',
            'name.max' => 'Sub Category may not be greater than 191 characters.',
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
                'description' => 'Name of the subcategory.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the subcategory.',
                'example' => 1,
            ],
        ];
    }
}
