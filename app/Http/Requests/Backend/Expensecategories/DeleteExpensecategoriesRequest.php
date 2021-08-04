<?php

namespace App\Http\Requests\Backend\Expensecategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteExpensecategoriesRequest.
 */
class DeleteExpensecategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-expensecategory');
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
