<?php

namespace App\Http\Requests\Backend\Salereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteSalereturnsRequest.
 */
class DeleteSalereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-salereturn');
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
