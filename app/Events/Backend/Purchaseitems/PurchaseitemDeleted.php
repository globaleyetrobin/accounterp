<?php

namespace App\Events\Backend\Purchaseitems;

use Illuminate\Queue\SerializesModels;

/**
 * Class PurchasereturnDeleted.
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
