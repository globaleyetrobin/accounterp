<?php

namespace App\Http\Requests\Backend\Units;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreUnitsRequest.
 */
class StoreUnitsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-unit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:Units,name'],
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
            'name.required' => 'Unit name must required',
            'name.unique' => 'Unit name already exist.',
            'name.max' => 'Unit may not be greater than 191 characters.',
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
                'description' => 'Name of the Unit.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the Unit.',
                'example' => 1,
            ],
        ];
    }
}
