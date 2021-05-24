<?php

namespace App\Models;

use App\Models\Traits\Attributes\SalaryallowanceAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\SalaryallowanceRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salaryallowance extends BaseModel
{
    use ModelAttributes, SoftDeletes, SalaryallowanceAttributes, SalaryallowanceRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
	 
	protected $table = 'salary_allowances';

 
    protected $fillable = [
        'salary_id',
		
		'allowance_id',
		
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
