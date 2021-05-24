<?php

namespace App\Models;

use App\Models\Traits\Attributes\SalereturnAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\SalereturnRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salereturn extends BaseModel
{
    use ModelAttributes, SoftDeletes, SalereturnAttributes, SalereturnRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
	
	    'sales_id', 
        'salereturn_no',
        'salereturn_date',
        'salereturn_company',
        'salereturn_branch',
        'salereturn_customer',
        'salereturn_image',
        'salereturn_notes',
        'salereturn_amount',
        'salereturn_discounttype',
        'salereturn_discountamount',
        'salereturn_discounttotal',
        'salereturn_taxtype',
        'salereturn_taxamount',
        'salereturn_netamount',
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
	
	
	protected $salesreturntypes = [
        'good' => 'Good',
        'demage' => 'Demage'
		
		
        
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
