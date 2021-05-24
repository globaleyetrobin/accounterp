<?php

namespace App\Events\Backend\Sales;

use Illuminate\Queue\SerializesModels;

/**
 * Class SaleCreated.
 */
class SaleCreated
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
