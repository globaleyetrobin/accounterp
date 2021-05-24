<?php

namespace App\Events\Backend\Purchaseitems;

use Illuminate\Queue\SerializesModels;

/**
 * Class PurchasereturnUpdated.
 */
class PurchaseitemCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $purchaseitems;

    /**
     * @param $purchaseitems
     */
    public function __construct($purchaseitems)
    {
        $this->purchaseitems = $purchaseitems;
    }
}
