<?php

namespace App\Http\Requests\Backend\Allowances;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageAllowancesRequest.
 */
class ManageAllowancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-allowance');
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
