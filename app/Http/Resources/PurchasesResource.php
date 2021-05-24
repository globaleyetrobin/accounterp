<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PurchasesResource extends Resource
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
            'purchase_no'  => $this->purchase_no,
			'purchase_date'  => $this->purchase_date,
			'purchase_company'  => $this->purchase_company,
			'purchase_branch'  => $this->purchase_branch,
			'purchase_supplier'  => $this->purchase_supplier,
			'purchase_image'  => $this->purchase_image,
			'purchase_notes'  => $this->purchase_notes,
			'purchase_amount'  => $this->purchase_amount,
			'purchase_discounttype'  => $this->purchase_discounttype,
			'purchase_discountamount'  => $this->purchase_discountamount,
			'purchase_discounttotal'  => $this->purchase_discounttotal,
			'purchase_taxtype'  => $this->purchase_taxtype,
			'purchase_taxamount'  => $this->purchase_taxamount,
			'purchase_netamount'  => $this->purchase_netamount,

			
			
			
            'status' => $this->status,
            'display_status' => $this->display_status,
            'created_at' => optional($this->created_at)->toDateTimeString(),
            'created_by' => optional($this->creator)->full_name,
            'updated_at' => optional($this->updated_at)->toDateTimeString(),
            'updated_by' => optional($this->updater)->full_name,
        ];
    }
}
