<?php

namespace App\Events\Backend\Purchasereturnitems;

use Illuminate\Queue\SerializesModels;

/**
 * Class PurchasereturnitemCreated.
 */
class PurchasereturnitemCreated
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
