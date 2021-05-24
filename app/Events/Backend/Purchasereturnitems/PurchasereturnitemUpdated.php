<?php

namespace App\Events\Backend\Purchasereturnitems;

use Illuminate\Queue\SerializesModels;

/**
 * Class PurchasereturnitemUpdated.
 */
class PurchasereturnitemUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $purchasereturnitems;

    /**
     * @param $purchasereturnitems
     */
    public function __construct($purchasereturnitems)
    {
        $this->purchasereturnitems = $purchasereturnitems;
    }
}
