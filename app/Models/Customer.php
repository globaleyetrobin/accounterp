<?php

namespace App\Models;

use App\Models\Traits\Attributes\CustomerAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\CustomerRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends BaseModel
{
    use ModelAttributes, SoftDeletes, CustomerAttributes, CustomerRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
		'company_id',
		'email',
		'phoneno',
		'address',
		'website',
        'status',
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
