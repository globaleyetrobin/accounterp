<?php

namespace App\Http\Requests\Backend\Branches;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateBranchesRequest.
 */
class CreateBranchesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-branch');
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
