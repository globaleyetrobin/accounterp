<?php

namespace App\Models;

use App\Models\Traits\Attributes\AccounttypeAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\AccounttypeRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accounttype extends BaseModel
{
    use ModelAttributes, SoftDeletes, AccounttypeAttributes, AccounttypeRelationships;

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
	
	 public static function Accounttypeselectlist()
	{
		
		$accounttypes = Accounttype::where('parent_id',null)->get();
		
		$items['']='Please Select';
		foreach($accounttypes as $accounttype)
		{
			
			$items[$accounttype->id]=$accounttype->name;
		}
		
		return $items;
		
	}
}
