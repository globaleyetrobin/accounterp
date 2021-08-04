<?php

namespace App\Events\Backend\Accountcategories;

use Illuminate\Queue\SerializesModels;

/**
 * Class AccountcategoryDeleted.
 */
class AccountcategoryDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $accountcategory;

    /**
     * @param $accountcategory
     */
    public function __construct($accountcategory)
    {
        $this->accountcategory = $accountcategory;
    }
}
