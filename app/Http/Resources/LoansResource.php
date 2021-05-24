<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class LoansResource extends Resource
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
            'name' => $this->name,
			
			'employee_id' => $this->employee_id,
			'amount' => $this->amount,
			'duration' => $this->duration,
			'emi' => $this->emi,
			'interest' => $this->interest,
			'total_interest' => $this->total_interest,
			'total_amount' => $this->total_amount,
			'startdate' => $this->startdate,
			'enddate' => $this->enddate,
			
			
			
			
			
            'status' => $this->status,
            'display_status' => $this->display_status,
            'created_at' => optional($this->created_at)->toDateTimeString(),
            'created_by' => optional($this->creator)->full_name,
            'updated_at' => optional($this->updated_at)->toDateTimeString(),
            'updated_by' => optional($this->updater)->full_name,
        ];
    }
}
