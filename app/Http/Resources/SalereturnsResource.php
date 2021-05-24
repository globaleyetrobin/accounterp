<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SalereturnsResource extends Resource
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
            'salereturn_no'  => $this->salereturn_no,
			'salereturn_date'  => $this->salereturn_date,
			'salereturn_company'  => $this->salereturn_company,
			'salereturn_branch'  => $this->salereturn_branch,
			'salereturn_customer'  => $this->salereturn_customer,
			'salereturn_image'  => $this->salereturn_image,
			'salereturn_notes'  => $this->salereturn_notes,
			'salereturn_amount'  => $this->salereturn_amount,
			'salereturn_discounttype'  => $this->salereturn_discounttype,
			'salereturn_discountamount'  => $this->salereturn_discountamount,
			'salereturn_discounttotal'  => $this->salereturn_discounttotal,
			'salereturn_taxtype'  => $this->salereturn_taxtype,
			'salereturn_taxamount'  => $this->salereturn_taxamount,
			'salereturn_netamount'  => $this->salereturn_netamount,

			
			
			
            'status' => $this->status,
            'display_status' => $this->display_status,
            'created_at' => optional($this->created_at)->toDateTimeString(),
            'created_by' => optional($this->creator)->full_name,
            'updated_at' => optional($this->updated_at)->toDateTimeString(),
            'updated_by' => optional($this->updater)->full_name,
        ];
    }
}
