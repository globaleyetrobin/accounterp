<?php

namespace App\Http\Requests\Backend\Purchasereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeletePurchasereturnsRequest.
 */
class DeletePurchasereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-purchasereturn');
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
