<?php

namespace App\Http\Requests\Backend\Accountsubcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreAccountsubcategoriesRequest.
 */
class StoreAccountsubcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-accountsubcategory');
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
            'name.required' => 'Account Category name must required',
            'name.unique' => 'Account Category name already exist.',
            'name.max' => 'Account Category may not be greater than 191 characters.',
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
