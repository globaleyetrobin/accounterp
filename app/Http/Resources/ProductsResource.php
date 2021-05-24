<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductsResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
                'id' => $this->id,
            'product_name'  => $this->product_name,
			'product_code'  => $this->product_code,
			'product_barcode'  => $this->product_barcode,
			'product_cat'  => $this->product_cat,
			'product_subcat'  => $this->product_subcat,
			'product_brand'  => $this->product_brand,
			'product_unit'  => $this->product_unit,
			'product_image'  => $this->product_image,
			'product_alertqty'  => $this->product_alertqty,
			'product_tax'  => $this->product_tax,
			'product_discounttype'  => $this->product_discounttype,
			'product_discount'  => $this->product_discount,
			'product_amount'  => $this->product_amount,
			'product_taxamount'  => $this->product_taxamount,
			'product_margintype'  => $this->product_margintype,
			'product_marginamount'  => $this->product_marginamount,
			'product_netamount'  => $this->product_netamount,
			
			
            'status' => $this->status,
            'display_status' => $this->display_status,
            'created_at' => optional($this->created_at)->toDateTimeString(),
            'created_by' => optional($this->creator)->full_name,
            'updated_at' => optional($this->updated_at)->toDateTimeString(),
            'updated_by' => optional($this->updater)->full_name,
        ];
    }
}
