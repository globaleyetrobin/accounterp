<?php

namespace App\Events\Backend\Suppliers;

use Illuminate\Queue\SerializesModels;

/**
 * Class supplierUpdated.
 */
class SupplierUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $supplier;

    /**
     * @param $blogcategory
     */
    public function __construct($supplier)
    {
        $this->supplier = $supplier;
    }
}
