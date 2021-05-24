<?php

namespace App\Http\Requests\Backend\Companies;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateCompaniesRequest.
 */
class UpdateCompaniesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-company');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:companies,name,'.optional($this->route('company'))->id],
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
            'name.unique' => 'Company name already exists, please enter a different name.',
            'name.required' => 'Please insert Company Title',
            'name.max' => 'Company may not be greater than 191 characters.',
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
                'description' => 'Name of the Company.',
                'example' => 'Robin Solutions',
            ],
            'status' => [
                'description' => 'Status of the Company.',
                'example' => 1,
            ],
        ];
    }
}
