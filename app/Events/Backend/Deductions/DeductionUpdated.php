<?php

namespace App\Events\Backend\Deductions;

use Illuminate\Queue\SerializesModels;

/**
 * Class DeductionUpdated.
 */
class DeductionUpdated
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
