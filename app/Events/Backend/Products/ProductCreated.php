<?php

namespace App\Events\Backend\Products;

use Illuminate\Queue\SerializesModels;

/**
 * Class ProductCreated.
 */
class ProductCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $products;

    /**
     * @param $products
     */
    public function __construct($products)
    {
        $this->products = $products;
    }
}
