<?php

namespace App\Http\Requests\Backend\Accountcategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteAccountcategoriesRequest.
 */
class DeleteAccountcategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-accountcategory');
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
