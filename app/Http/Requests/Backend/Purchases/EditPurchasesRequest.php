<?php

namespace App\Http\Requests\Backend\Purchases;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EditPurchasesRequest.
 */
class EditPurchasesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-purchase');
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
