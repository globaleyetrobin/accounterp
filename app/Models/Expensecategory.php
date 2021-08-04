<?php

namespace App\Models;

use App\Models\Traits\Attributes\ExpensecategoryAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\ExpensecategoryRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expensecategory extends BaseModel
{
    use ModelAttributes, SoftDeletes, ExpensecategoryAttributes, ExpensecategoryRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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
	
	 public static function Expensecategoryselectlist()
	{
		
		$categories = Expensecategory::where('parent_id',null)->get();
		
		$items['']='Please Select';
		foreach($categories as $cate)
		{
			
			$items[$cate->id]=$cate->name;
		}
		
		return $items;
		
	}
}
