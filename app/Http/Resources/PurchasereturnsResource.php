<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PurchasereturnsResource extends Resource
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
            'purchasereturn_no'  => $this->purchasereturn_no,
			'purchasereturn_date'  => $this->purchasereturn_date,
			'purchasereturn_company'  => $this->purchasereturn_company,
			'purchasereturn_branch'  => $this->purchasereturn_branch,
			'purchasereturn_supplier'  => $this->purchasereturn_supplier,
			'purchasereturn_image'  => $this->purchasereturn_image,
			'purchasereturn_notes'  => $this->purchasereturn_notes,
			'purchasereturn_amount'  => $this->purchasereturn_amount,
			'purchasereturn_discounttype'  => $this->purchasereturn_discounttype,
			'purchasereturn_discountamount'  => $this->purchasereturn_discountamount,
			'purchasereturn_discounttotal'  => $this->purchasereturn_discounttotal,
			'purchasereturn_taxtype'  => $this->purchasereturn_taxtype,
			'purchasereturn_taxamount'  => $this->purchasereturn_taxamount,
			'purchasereturn_netamount'  => $this->purchasereturn_netamount,

			
			
			
            'status' => $this->status,
            'display_status' => $this->display_status,
            'created_at' => optional($this->created_at)->toDateTimeString(),
            'created_by' => optional($this->creator)->full_name,
            'updated_at' => optional($this->updated_at)->toDateTimeString(),
            'updated_by' => optional($this->updater)->full_name,
        ];
    }
}
