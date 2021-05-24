<?php

namespace App\Events\Backend\Allowances;

use Illuminate\Queue\SerializesModels;

/**
 * Class AllowanceCreated.
 */
class AllowanceCreated
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
