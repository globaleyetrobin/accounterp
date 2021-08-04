<?php

namespace App\Events\Backend\Accountsubcategories;

use Illuminate\Queue\SerializesModels;

/**
 * Class AccountsubcategoryCreated.
 */
class AccountsubcategoryCreated
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
