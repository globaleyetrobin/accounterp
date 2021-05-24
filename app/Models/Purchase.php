<?php

namespace App\Models;

use App\Models\Traits\Attributes\PurchaseAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\PurchaseRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends BaseModel
{
    use ModelAttributes, SoftDeletes, PurchaseAttributes, PurchaseRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'purchase_no',
        'purchase_date',
        'purchase_company',
        'purchase_branch',
        'purchase_supplier',
        'purchase_image',
        'purchase_notes',
        'purchase_amount',
        'purchase_discounttype',
        'purchase_discountamount',
        'purchase_discounttotal',
        'purchase_taxtype',
        'purchase_taxamount',
        'purchase_netamount',
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
        0 => 'Ordered',
        1 => 'Pending',
		2 => 'Received',
		
        
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
