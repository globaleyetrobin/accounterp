<?php

namespace App\Http\Requests\Backend\Journels;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EditJournelsRequest.
 */
class EditJournelsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-journel');
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
