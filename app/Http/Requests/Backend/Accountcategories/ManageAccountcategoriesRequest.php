<?php

namespace App\Http\Requests\Backend\Accountcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageAccountcategoriesRequest.
 */
class ManageAccountcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-accountcategory');
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
