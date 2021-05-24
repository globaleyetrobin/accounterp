<?php

namespace App\Events\Backend\Purchases;

use Illuminate\Queue\SerializesModels;

/**
 * Class PurchaseCreated.
 */
class PurchaseCreated
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
