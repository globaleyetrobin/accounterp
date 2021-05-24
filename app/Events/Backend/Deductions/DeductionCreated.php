<?php

namespace App\Events\Backend\Deductions;

use Illuminate\Queue\SerializesModels;

/**
 * Class DeductionCreated.
 */
class DeductionCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $deduction;

    /**
     * @param $deduction
     */
    public function __construct($deduction)
    {
        $this->deduction = $deduction;
    }
}
