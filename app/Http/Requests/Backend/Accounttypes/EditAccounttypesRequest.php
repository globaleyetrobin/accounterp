<?php

namespace App\Http\Requests\Backend\Accounttypes;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EditAccounttypesRequest.
 */
class EditAccounttypesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-accounttype');
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
