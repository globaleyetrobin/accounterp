<?php

namespace App\Http\Requests\Backend\Accounttypes;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreAccounttypesRequest.
 */
class StoreAccounttypesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-accounttype');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:accounttypes,name'],
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
            'name.required' => 'Accounttype name must required',
            'name.unique' => 'Accounttype name already exist.',
            'name.max' => 'Accounttype may not be greater than 191 characters.',
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
                'description' => 'Name of the accounttype.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the accounttype.',
                'example' => 1,
            ],
        ];
    }
}
