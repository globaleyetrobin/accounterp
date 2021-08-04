<?php

namespace App\Models;

use App\Models\Traits\Attributes\JournelAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\JournelRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Accountcategory;


class Journel extends BaseModel
{
    use ModelAttributes, SoftDeletes, JournelAttributes, JournelRelationships;

   protected $creditdebits = [
        'credit' => 'Credit',
        'debit' => 'Debit'
        
        
        
    ];

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date',
        'amount',
        'journel_type',
        'journel_category',
        'journel_subcategory',
        'journel_entry',
		'remarks',
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
	
	 public static function Journelselectlist()
	{
		
		$journels = Accountcategory::where('parent_id',null)->get();
		
		$items['']='Please Select';
		foreach($journels as $journel)
		{
			
			$items[$journel->id]=$journel->name;
		}
		
		return $items;
		
	}
}
