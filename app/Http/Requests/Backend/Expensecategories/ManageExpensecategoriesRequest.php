<?php

namespace App\Http\Requests\Backend\Expensecategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageExpensecategoriesRequest.
 */
class ManageExpensecategoriesRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        
        return access()->allow('view-expensecategory');
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
