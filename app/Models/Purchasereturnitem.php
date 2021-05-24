<?php

namespace App\Models;


use App\Models\Traits\ModelAttributes;

use Illuminate\Database\Eloquent\SoftDeletes;

class Purchasereturnitem extends BaseModel
{
    use ModelAttributes, SoftDeletes;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'purchasereturn_id',
		'purchasereturnitems_name',
		'purchasereturnitems_cat',
		'purchasereturnitems_subcat',
		'purchasereturnitems_quantity',
		'purchasereturnitems_price',
		'purchasereturnitems_actual_amount',
		'purchasereturnitems_discount_rate',
        'purchasereturnitems_discount_amount',
        'purchasereturnitems_final_amount',
        
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
