<?php

namespace App\Models;

use App\Models\Traits\Attributes\LoanAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\LoanRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends BaseModel
{
    use ModelAttributes, SoftDeletes, LoanAttributes, LoanRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
		
		'employee_id',
		
		'amount',
		
		'duration',
		
		'emi',
		
		'interest',
		
		'total_interest',
		
		'total_amount',
		
		'startdate',
		
		'enddate',
		
        'status',
		
        'created_by',
        'updated_by',
    ];

    /**
     * Casts.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * Appends.
     *
     * @var array
     */
    protected $appends = [
        'display_status',
    ];
	

}
