<?php

namespace App\Models;


use App\Models\Traits\ModelAttributes;

use Illuminate\Database\Eloquent\SoftDeletes;

class Purchaseitem extends BaseModel
{
    use ModelAttributes, SoftDeletes;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'purchase_id',
		'purchaseitems_name',
		'purchaseitems_cat',
		'purchaseitems_subcat',
		'purchaseitems_quantity',
		'purchaseitems_price',
		'purchaseitems_actual_amount',
		'purchaseitems_discount_rate',
        'purchaseitems_discount_amount',
        'purchaseitems_final_amount',
        
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
}
