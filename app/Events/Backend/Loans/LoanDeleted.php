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
    public $loan;

    /**
     * @param $loan
     */
    public function __construct($loan)
    {
        $this->loan = $loan;
    }
}
