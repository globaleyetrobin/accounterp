<?php

namespace App\Http\Requests\Backend\Brands;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DeleteBrandsRequest.
 */
class DeleteBrandsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-brand');
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