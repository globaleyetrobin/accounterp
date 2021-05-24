<?php

namespace App\Models;

use App\Models\Traits\Attributes\BranchAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\BranchRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends BaseModel
{
    use ModelAttributes, SoftDeletes, BranchAttributes, BranchRelationships;

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
