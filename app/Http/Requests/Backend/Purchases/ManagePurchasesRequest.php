<?php

namespace App\Http\Requests\Backend\Purchases;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManagePurchasesRequest.
 */
class ManagePurchasesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-purchase');
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
