<?php

namespace App\Events\Backend\Salereturns;

use Illuminate\Queue\SerializesModels;

/**
 * Class SalereturnUpdated.
 */
class SalereturnUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $salereturns;

    /**
     * @param $salereturns
     */
    public function __construct($salereturns)
    {
        $this->salereturns = $salereturns;
    }
}
