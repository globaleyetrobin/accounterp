<?php

namespace App\Models;

use App\Models\Traits\Attributes\SalarydeductionAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\SalarydeductionRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salarydeduction extends BaseModel
{
    use ModelAttributes, SoftDeletes, SalarydeductionAttributes, SalarydeductionRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
	 
	protected $table = 'salary_deductions';

 
    protected $fillable = [
        'salary_id',
		
		'deduction_id',
		
		'amount',
	    'employee_id',
		
		
		
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
