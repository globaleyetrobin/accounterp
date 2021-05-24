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
    public $sales;

    /**
     * @param $sales
     */
    public function __construct($sales)
    {
        $this->sales = $sales;
    }
}
