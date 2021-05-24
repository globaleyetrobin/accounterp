<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SalesResource extends Resource
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
            'sale_no'  => $this->sale_no,
			'sale_date'  => $this->sale_date,
			'sale_company'  => $this->sale_company,
			'sale_branch'  => $this->sale_branch,
			'sale_customer'  => $this->sale_customer,
			'sale_image'  => $this->sale_image,
			'sale_notes'  => $this->sale_notes,
			'sale_amount'  => $this->sale_amount,
			'sale_discounttype'  => $this->sale_discounttype,
			'sale_discountamount'  => $this->sale_discountamount,
			'sale_discounttotal'  => $this->sale_discounttotal,
			'sale_taxtype'  => $this->sale_taxtype,
			'sale_taxamount'  => $this->sale_taxamount,
			'sale_netamount'  => $this->sale_netamount,

			
			
			
            'status' => $this->status,
            'display_status' => $this->display_status,
            'created_at' => optional($this->created_at)->toDateTimeString(),
            'created_by' => optional($this->creator)->full_name,
            'updated_at' => optional($this->updated_at)->toDateTimeString(),
            'updated_by' => optional($this->updater)->full_name,
        ];
    }
}
