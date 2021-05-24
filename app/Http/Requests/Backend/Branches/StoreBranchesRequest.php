<?php

namespace App\Http\Requests\Backend\Branches;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreBranchesRequest.
 */
class StoreBranchesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-branch');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191', 'unique:branches,name'],
			'category_id' => ['integer'],
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
            'name.required' => 'Branch name must required',
			//'category_id.required' => 'Company name must required',
            'name.unique' => 'Branch name already exist.',
            'name.max' => 'Branch may not be greater than 191 characters.',
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
                'description' => 'Name of the Branch.',
                'example' => 'Robin  Solutions',
            ],
			'category_id' => [
                'description' => 'Name of the Company.',
                'example' => 'Robin  Solutions',
            ],
            'status' => [
                'description' => 'Status of the Branch.',
                'example' => 1,
            ],
        ];
    }
}
