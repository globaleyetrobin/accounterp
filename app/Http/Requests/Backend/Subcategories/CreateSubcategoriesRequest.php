<?php

namespace App\Http\Requests\Backend\Subcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateSubcategoriesRequest.
 */
class CreateSubcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-subcategory');
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
