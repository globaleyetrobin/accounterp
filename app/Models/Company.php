<?php

namespace App\Models;

use App\Models\Traits\Attributes\CompanyAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\CompanyRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends BaseModel
{
    use ModelAttributes, SoftDeletes, CompanyAttributes, CompanyRelationships;

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
		'email',
		'phoneno',
		'address',
		'website',
        'currency',
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
