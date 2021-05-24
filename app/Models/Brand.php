<?php

namespace App\Models;

use App\Models\Traits\Attributes\BrandAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\BrandRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends BaseModel
{
    use ModelAttributes, SoftDeletes, BrandAttributes, BrandRelationships;

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
