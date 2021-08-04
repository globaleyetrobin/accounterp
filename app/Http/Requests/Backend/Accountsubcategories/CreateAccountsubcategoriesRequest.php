<?php

namespace App\Http\Requests\Backend\Accountsubcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateAccountsubcategoriesRequest.
 */
class CreateAccountsubcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-accountsubcategory');
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
