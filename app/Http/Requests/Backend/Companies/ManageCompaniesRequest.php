<?php

namespace App\Http\Requests\Backend\Companies;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageCompaniesRequest.
 */
class ManageCompaniesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-company');
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
