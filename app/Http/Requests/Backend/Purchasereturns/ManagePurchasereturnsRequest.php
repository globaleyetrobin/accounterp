<?php

namespace App\Http\Requests\Backend\Purchasereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManagePurchasereturnsRequest.
 */
class ManagePurchasereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-purchasereturn');
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
