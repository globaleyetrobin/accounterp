<?php

namespace App\Events\Backend\Accountsubcategories;

use Illuminate\Queue\SerializesModels;

/**
 * Class AccountsubcategoryUpdated.
 */
class AccountsubcategoryUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $accountsubcategory;

    /**
     * @param $accountsubcategory
     */
    public function __construct($accountsubcategory)
    {
        $this->accountsubcategory = $accountsubcategory;
    }
}
