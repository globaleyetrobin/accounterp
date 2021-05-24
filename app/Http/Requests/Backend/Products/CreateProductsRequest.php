<?php

namespace App\Http\Requests\Backend\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateProductsRequest.
 */
class CreateProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-product');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|max:191|unique:products,product_name,'.$this->segment(4),
            'product_code' => 'required',
           
            'product_cat' => 'required',
            'product_netamount' => 'required',
           
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'product_name.required' => 'Please insert Product Title',
            'name.max' => 'Product Title may not be greater than 191 characters.',
            'name.unique' => 'The product name already taken. Please try with different name.',
        ];
    }
}
