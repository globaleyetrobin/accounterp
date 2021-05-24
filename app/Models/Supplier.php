<?php

namespace App\Models;

use App\Models\Traits\Attributes\SupplierAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\SupplierRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends BaseModel
{
    use ModelAttributes, SoftDeletes, SupplierAttributes, SupplierRelationships;

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
