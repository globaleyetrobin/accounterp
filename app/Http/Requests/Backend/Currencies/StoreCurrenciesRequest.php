<?php

namespace App\Http\Requests\Backend\Currencies;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCurrenciesRequest.
 */
class StoreCurrenciesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-currency');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:currencies,name'],
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
            'name.required' => 'Currency name must required',
            'name.unique' => 'Currency name already exist.',
            'name.max' => 'Currency may not be greater than 191 characters.',
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
                'description' => 'Name of the Currency.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the Currency.',
                'example' => 1,
            ],
        ];
    }
}
