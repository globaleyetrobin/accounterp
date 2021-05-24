<?php

namespace App\Events\Backend\Allowances;

use Illuminate\Queue\SerializesModels;

/**
 * Class AllowanceUpdated.
 */
class AllowanceUpdated
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
