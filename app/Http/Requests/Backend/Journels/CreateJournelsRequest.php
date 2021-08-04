<?php

namespace App\Http\Requests\Backend\Journels;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateJournelsRequest.
 */
class CreateJournelsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-journel');
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
