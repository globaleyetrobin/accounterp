<?php

namespace App\Http\Requests\Backend\Allowances;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateAllowancesRequest.
 */
class CreateAllowancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-allowance');
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
