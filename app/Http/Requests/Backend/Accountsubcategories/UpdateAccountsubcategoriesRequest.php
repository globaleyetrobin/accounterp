<?php

namespace App\Http\Requests\Backend\Accountsubcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateAccountsubcategoriesRequest.
 */
class UpdateAccountsubcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-accountsubcategory');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191'],
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
            'name.unique' => 'Category name already exists, please enter a different name.',
            'name.required' => 'Please insert Blog Title',
            'name.max' => 'Category may not be greater than 191 characters.',
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
                'description' => 'Name of the accountsubcategory.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the accountsubcategory.',
                'example' => 1,
            ],
        ];
    }
}
