<?php

namespace App\Models;

use App\Models\Traits\Attributes\DeductionAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\DeductionRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deduction extends BaseModel
{
    use ModelAttributes, SoftDeletes, DeductionAttributes, DeductionRelationships;

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
