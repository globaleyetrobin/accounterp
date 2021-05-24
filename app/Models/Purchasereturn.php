<?php

namespace App\Models;

use App\Models\Traits\Attributes\PurchasereturnAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\PurchasereturnRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchasereturn extends BaseModel
{
    use ModelAttributes, SoftDeletes, PurchasereturnAttributes, PurchasereturnRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'purchasereturn_no',
        'purchasereturn_date',
        'purchasereturn_company',
        'purchasereturn_branch',
        'purchasereturn_supplier',
        'purchasereturn_image',
        'purchasereturn_notes',
        'purchasereturn_amount',
        'purchasereturn_discounttype',
        'purchasereturn_discountamount',
        'purchasereturn_discounttotal',
        'purchasereturn_taxtype',
        'purchasereturn_taxamount',
        'purchasereturn_netamount',
         'status',
     
        'created_by',
        'updated_by',
    ];

    /**
     * Dates.
     *
     * @var array
     */
    protected $dates = [
       // 'publish_datetime',
        'created_at',
        'updated_at',
    ];

    /**
     * Statuses.
     *
     * @var array
     */
    protected $statuses = [
       
        0 => 'Not Returned',
        1 => 'Returned',
		
		
        
    ];
	
	 protected $discounttypes = [
        'percentage' => 'percentage',
        'fixed' => 'Fixed'
		
		
        
    ];
	
	
	 protected $taxtypes = [
	    '' => 'No Tax',
        '5' => 'GST 5% ',
        '10' => 'GST 10% ',
		'18' => 'GST 18% ',
		
		
        
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
