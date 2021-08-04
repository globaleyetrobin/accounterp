<?php

namespace App\Events\Backend\Accountcategories;

use Illuminate\Queue\SerializesModels;

/**
 * Class AccountcategoryUpdated.
 */
class AccountcategoryUpdated
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
