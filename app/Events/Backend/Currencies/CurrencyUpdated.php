<?php

namespace App\Events\Backend\Currencies;

use Illuminate\Queue\SerializesModels;

/**
 * Class CurrencyUpdated.
 */
class CurrencyUpdated
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
