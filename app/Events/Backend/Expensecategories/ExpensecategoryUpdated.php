<?php

namespace App\Events\Backend\Expensecategories;

use Illuminate\Queue\SerializesModels;

/**
 * Class ExpensecategoryUpdated.
 */
class ExpensecategoryUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $expensecategory;

    /**
     * @param $expensecategory
     */
    public function __construct($expensecategory)
    {
        $this->expensecategory = $expensecategory;
    }
}
