<?php

namespace App\Events\Backend\Loans;

use Illuminate\Queue\SerializesModels;

/**
 * Class LoanCreated.
 */
class LoanCreated
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
