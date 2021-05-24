<?php

namespace App\Events\Backend\Customers;

use Illuminate\Queue\SerializesModels;

/**
 * Class customerDeleted.
 */
class CustomerDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $customer;

    /**
     * @param $blogcategory
     */
    public function __construct($customer)
    {
        $this->customer = $customer;
    }
}
