<?php

namespace App\Http\Requests\Backend\Expenses;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageExpensesRequest.
 */
class ManageExpensesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-expense');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
