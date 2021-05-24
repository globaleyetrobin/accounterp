<?php

namespace App\Http\Requests\Backend\Currencies;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateCurrenciesRequest.
 */
class UpdateCurrenciesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-currency');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:currencies,name,'.optional($this->route('currency'))->id],
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
            'name.unique' => 'currency name already exists, please enter a different name.',
            'name.required' => 'Please insert currency Title',
            'name.max' => 'currency may not be greater than 191 characters.',
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
                'description' => 'Name of the currency.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the currency.',
                'example' => 1,
            ],
        ];
    }
}
