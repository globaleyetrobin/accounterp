<?php

namespace App\Http\Requests\Backend\Purchasereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EditPurchasereturnsRequest.
 */
class EditPurchasereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-purchasereturn');
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
