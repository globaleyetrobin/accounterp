<?php

namespace App\Http\Requests\Backend\Loans;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteLoansRequest.
 */
class DeleteLoansRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-loan');
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
