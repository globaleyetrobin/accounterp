<?php

namespace App\Models;

use App\Models\Traits\Attributes\SalaryAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\SalaryRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salary extends BaseModel
{
    use ModelAttributes, SoftDeletes, SalaryAttributes, SalaryRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
	 
	protected $table = 'salary';

 
    protected $fillable = [
        
		
		'employee_id',
		
		'basic_salary',
		
		'total_allowance',
		
		'total_deductions',
		
		'net_salary',
		
		
		
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
