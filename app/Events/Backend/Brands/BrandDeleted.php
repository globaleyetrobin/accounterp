<?php

namespace App\Events\Backend\Brands;

use Illuminate\Queue\SerializesModels;

/**
 * Class BrandDeleted.
 */
class BrandDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $brand;

    /**
     * @param $brand
     */
    public function __construct($brand)
    {
        $this->brand = $brand;
    }
}
