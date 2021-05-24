<?php

namespace App\Http\Requests\Backend\Brands;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageBrandsRequest.
 */
class ManageBrandsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-brand');
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
