<?php

namespace App\Events\Backend\Purchasereturns;

use Illuminate\Queue\SerializesModels;

/**
 * Class PurchasereturnUpdated.
 */
class PurchasereturnUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $purchasereturns;

    /**
     * @param $purchasereturns
     */
    public function __construct($purchasereturns)
    {
        $this->purchasereturns = $purchasereturns;
    }
}
