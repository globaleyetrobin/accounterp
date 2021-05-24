<?php

namespace App\Http\Requests\Backend\Units;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteUnitsRequest.
 */
class DeleteUnitsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-unit');
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
