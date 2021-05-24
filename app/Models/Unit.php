<?php

namespace App\Models;

use App\Models\Traits\Attributes\UnitAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\UnitRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends BaseModel
{
    use ModelAttributes, SoftDeletes, UnitAttributes, UnitRelationships;

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
