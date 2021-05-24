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
    public $salereturn;

    /**
     * @param $salereturn
     */
    public function __construct($salereturn)
    {
        $this->salereturn = $salereturn;
    }
}
