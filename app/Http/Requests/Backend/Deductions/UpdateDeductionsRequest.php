<?php

namespace App\Http\Requests\Backend\Deductions;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateDeductionsRequest.
 */
class UpdateDeductionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-deduction');
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
            'short_name' => ['required', 'max:191', 'unique:Deductions,short_name,'.optional($this->route('deduction'))->id],
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
            'short_name.unique' => 'deduction short name already exists, please enter a different name.',
            'name.required' => 'Please insert deduction Title',
            'name.max' => 'deduction may not be greater than 191 characters.',
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
                'description' => 'Name of the deduction.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the deduction.',
                'example' => 1,
            ],
        ];
    }
}
