<?php

namespace App\Http\Requests\Backend\Journels;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreJournelsRequest.
 */
class StoreJournelsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-journel');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:191'],
            //'amount' => ['required'],
            //'status' => ['boolean'],
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
            'name.required' => 'Journel name must required',
            'name.unique' => 'Journel name already exist.',
            'name.max' => 'Journel may not be greater than 191 characters.',
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
                'description' => 'Name of the journel.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the journel.',
                'example' => 1,
            ],
        ];
    }
}
