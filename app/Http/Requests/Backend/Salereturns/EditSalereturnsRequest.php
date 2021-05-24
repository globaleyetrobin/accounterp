<?php

namespace App\Http\Requests\Backend\Salereturns;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EditSalereturnsRequest.
 */
class EditSalereturnsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-salereturn');
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
