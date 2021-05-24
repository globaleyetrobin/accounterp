<?php

namespace App\Http\Requests\Backend\Units;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateUnitsRequest.
 */
class UpdateUnitsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-unit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:Units,name,'.optional($this->route('unit'))->id],
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
            'name.unique' => 'unit name already exists, please enter a different name.',
            'name.required' => 'Please insert unit Title',
            'name.max' => 'unit may not be greater than 191 characters.',
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
                'description' => 'Name of the unit.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the unit.',
                'example' => 1,
            ],
        ];
    }
}
