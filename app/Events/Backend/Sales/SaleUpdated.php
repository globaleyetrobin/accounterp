<?php

namespace App\Events\Backend\Sales;

use Illuminate\Queue\SerializesModels;

/**
 * Class SaleUpdated.
 */
class SaleUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $sale;

    /**
     * @param $sale
     */
    public function __construct($sale)
    {
        $this->sale = $sale;
    }
}
