<?php

namespace App\Models;

use App\Models\Traits\Attributes\SaleAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\SaleRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends BaseModel
{
    use ModelAttributes, SoftDeletes, SaleAttributes, SaleRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'sale_no',
        'sale_date',
        'sale_company',
        'sale_branch',
        'sale_customer',
        'sale_image',
        'sale_notes',
        'sale_amount',
        'sale_discounttype',
        'sale_discountamount',
        'sale_discounttotal',
        'sale_taxtype',
        'sale_taxamount',
        'sale_netamount',
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
	
	 protected $salesreturntypes = [
        'good' => 'Good',
        'demage' => 'Demage'
		
		
        
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
