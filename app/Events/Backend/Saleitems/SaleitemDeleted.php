<?php

namespace App\Events\Backend\Sales;

use Illuminate\Queue\SerializesModels;

/**
 * Class SaleDeleted.
 */
class SaleDeleted
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
