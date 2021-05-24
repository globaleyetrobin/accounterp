<?php

namespace App\Models;


use App\Models\Traits\ModelAttributes;

use Illuminate\Database\Eloquent\SoftDeletes;

class Salereturnitem extends BaseModel
{
    use ModelAttributes, SoftDeletes;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'salereturn_id',
		'salereturnitems_name',
		'salereturnitems_quantity',
        'salereturnitems_type',
		'salereturnitems_price',
		'salereturnitems_actual_amount',
		'salereturnitems_discount_rate',
        'salereturnitems_discount_amount',
        'salereturnitems_final_amount',
        
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
