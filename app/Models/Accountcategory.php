<?php

namespace App\Models;

use App\Models\Traits\Attributes\AccountcategoryAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\AccountcategoryRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Accounttype;
class Accountcategory extends BaseModel
{
    use ModelAttributes, SoftDeletes, AccountcategoryAttributes, AccountcategoryRelationships;
	
	protected $table = 'account_categories';

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
	
	 public static function Accountcategoryselectlist()
	{
		
		$accountcategories = Accountcategory::get();
		
		$items['']='Please Select';
		foreach($accountcategories as $cate)
		{
			
			$items[$cate->id]=$cate->name;
		}
		
		return $items;
		
	}

     public static function Accounttypeselectlist()
    {
        
        $accountcategories = Accounttype::get();
        
        $items['']='Please Select';
        foreach($accountcategories as $cate)
        {
            
            $items[$cate->id]=$cate->name;
        }
        
        return $items;
        
    }
}
