<?php

namespace App\Models;


use App\Models\Traits\ModelAttributes;

use Illuminate\Database\Eloquent\SoftDeletes;

class Saleitem extends BaseModel
{
    use ModelAttributes, SoftDeletes;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'sale_id',
		'saleitems_name',
        'saleitems_cat',
        'saleitems_subcat',
		'saleitems_quantity',
		'saleitems_price',
		'saleitems_actual_amount',
		'saleitems_discount_rate',
        'saleitems_discount_amount',
        'saleitems_final_amount',
        
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
