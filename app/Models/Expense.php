<?php

namespace App\Models;

use App\Models\Traits\Attributes\ExpenseAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\ExpenseRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Expensecategory;


class Expense extends BaseModel
{
    use ModelAttributes, SoftDeletes, ExpenseAttributes, ExpenseRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date',
        'amount',
        'status',
		'parent_id',
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
	
	 public static function Expenseselectlist()
	{
		
		$expenses = Expensecategory::where('parent_id',null)->get();
		
		$items['']='Please Select';
		foreach($expenses as $expense)
		{
			
			$items[$expense->id]=$expense->name;
		}
		
		return $items;
		
	}
}
