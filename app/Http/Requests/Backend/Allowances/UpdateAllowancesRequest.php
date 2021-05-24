<?php

namespace App\Http\Requests\Backend\Allowances;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateAllowancesRequest.
 */
class UpdateAllowancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-allowance');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
		    'name' => ['required'],
            'short_name' => ['required', 'max:191', 'unique:Allowances,short_name,'.optional($this->route('allowance'))->id],
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
            'short_name.unique' => 'allowance short name already exists, please enter a different name.',
            'name.required' => 'Please insert allowance Title',
            'name.max' => 'allowance may not be greater than 191 characters.',
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
                'description' => 'Name of the allowance.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the allowance.',
                'example' => 1,
            ],
        ];
    }
}
