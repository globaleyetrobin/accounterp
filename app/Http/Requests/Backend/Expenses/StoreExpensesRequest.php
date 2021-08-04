<?php

namespace App\Http\Requests\Backend\Expenses;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreExpensesRequest.
 */
class StoreExpensesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-expense');
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
            'name.required' => 'Expense name must required',
            'name.unique' => 'Expense name already exist.',
            'name.max' => 'Expense may not be greater than 191 characters.',
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
                'description' => 'Name of the expense.',
                'example' => 'Software',
            ],
            'status' => [
                'description' => 'Status of the expense.',
                'example' => 1,
            ],
        ];
    }
}
