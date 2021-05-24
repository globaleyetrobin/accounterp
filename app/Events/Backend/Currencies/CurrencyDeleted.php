<?php

namespace App\Events\Backend\Currencies;

use Illuminate\Queue\SerializesModels;

/**
 * Class CurrencyDeleted.
 */
class CurrencyDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $currency;

    /**
     * @param $currency
     */
    public function __construct($currency)
    {
        $this->currency = $currency;
    }
}
