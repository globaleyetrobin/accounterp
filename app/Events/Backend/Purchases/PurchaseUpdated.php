<?php

namespace App\Events\Backend\Purchases;

use Illuminate\Queue\SerializesModels;

/**
 * Class PurchaseUpdated.
 */
class PurchaseUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $purchases;

    /**
     * @param $purchases
     */
    public function __construct($purchases)
    {
        $this->purchases = $purchases;
    }
}
