<?php

namespace App\Http\Requests\Backend\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateProductsRequest.
 */
class UpdateProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-product');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
            'product_name' => ['required', 'max:191', 'unique:products,product_name,'.optional($this->route('product'))->id],
			
			
            'product_code' => ['required', 'string'],
			
			'product_cat' => ['required'],
            
            'product_netamount' => ['required'],
            'status' => ['integer', 'between:0,3'],
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
            'name.unique' => 'Product name already exists, please enter a different name.',
            'name.required' => 'Please insert Product Title',
            'name.max' => 'Product Title may not be greater than 191 characters.',
        ];
    }
}
