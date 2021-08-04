<?php

namespace App\Http\Requests\Backend\Accountsubcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteAccountsubcategoriesRequest.
 */
class DeleteAccountsubcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-accountsubcategory');
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
