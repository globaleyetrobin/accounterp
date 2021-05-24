<?php

namespace App\Http\Requests\Backend\Currencies;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EditCurrenciesRequest.
 */
class EditCurrenciesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-currency');
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
