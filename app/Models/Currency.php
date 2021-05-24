<?php

namespace App\Models;

use App\Models\Traits\Attributes\CurrencyAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\CurrencyRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends BaseModel
{
    use ModelAttributes, SoftDeletes, CurrencyAttributes, CurrencyRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
		'short_name',
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
	

}
