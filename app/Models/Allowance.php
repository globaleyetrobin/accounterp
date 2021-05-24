<?php

namespace App\Models;

use App\Models\Traits\Attributes\AllowanceAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\AllowanceRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Allowance extends BaseModel
{
    use ModelAttributes, SoftDeletes, AllowanceAttributes, AllowanceRelationships;

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
