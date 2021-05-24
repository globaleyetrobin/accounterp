<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProductAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\ProductRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends BaseModel
{
    use ModelAttributes, SoftDeletes, ProductAttributes, ProductRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'product_code',
        'product_barcode',
        'product_cat',
		'product_subcat',
		'product_brand',
		'product_unit',
		'product_image',
		'product_alertqty',
		'product_tax',
		'product_discounttype',
		'product_discount',
		'product_amount',
		'product_taxamount',
		'product_margintype',
		'product_marginamount',
		'product_netamount',
      
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
        0 => 'InActive',
        1 => 'Active',
        
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
