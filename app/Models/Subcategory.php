<?php

namespace App\Models;

use App\Models\Traits\Attributes\SubcategoryAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\SubcategoryRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends BaseModel
{
    use ModelAttributes, SoftDeletes, SubcategoryAttributes, SubcategoryRelationships;
	
	protected $table = 'categories';


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
	
	 public static function Subcategoryselectlist()
	{
		
		$subcategories = Subcategory::where('parent_id',null)->get();
		
		$items['']='Please Select';
		foreach($subcategories as $cate)
		{
			
			$items[$cate->id]=$cate->name;
		}
		
		return $items;
		
	}
}
