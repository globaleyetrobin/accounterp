<?php

namespace App\Http\Requests\Backend\Currencies;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageCurrenciesRequest.
 */
class ManageCurrenciesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-currency');
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
