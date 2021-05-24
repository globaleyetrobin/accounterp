<?php

namespace App\Http\Requests\Backend\Brands;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreBrandsRequest.
 */
class StoreBrandsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-Brand');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:Brands,name'],
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
            'name.required' => 'Brand name must required',
            'name.unique' => 'Brand name already exist.',
            'name.max' => 'Brand may not be greater than 191 characters.',
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
                'description' => 'Name of the Brand.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the Brand.',
                'example' => 1,
            ],
        ];
    }
}
