<?php

namespace App\Http\Requests\Backend\Branches;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageBranchesRequest.
 */
class ManageBranchesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-branch');
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
