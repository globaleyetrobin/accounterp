<?php

namespace App\Models;

use App\Models\Traits\Attributes\AccountsubcategoryAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\AccountsubcategoryRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Accounttype;
class Accountsubcategory extends BaseModel
{
    use ModelAttributes, SoftDeletes, AccountsubcategoryAttributes, AccountsubcategoryRelationships;
	
	protected $table = 'account_subcategories';

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
        'status',
		'parent_id',
        'account_type',
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
	
	 public static function Accountsubcategoryselectlist()
	{
		
		$accountsubcategories = Accountsubcategory::get();
		
		$items['']='Please Select';
		foreach($accountsubcategories as $cate)
		{
			
			$items[$cate->id]=$cate->name;
		}
		
		return $items;
		
	}

     public static function Accounttypeselectlist()
    {
        
        $accountsubcategories = Accounttype::get();
        
        $items['']='Please Select';
        foreach($accountsubcategories as $cate)
        {
            
            $items[$cate->id]=$cate->name;
        }
        
        return $items;
        
    }
}
