<?php

namespace App\Events\Backend\Allowances;

use Illuminate\Queue\SerializesModels;

/**
 * Class AllowanceDeleted.
 */
class AllowanceDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $allowance;

    /**
     * @param $allowance
     */
    public function __construct($allowance)
    {
        $this->allowance = $allowance;
    }
}
