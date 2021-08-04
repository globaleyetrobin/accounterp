<?php

namespace App\Events\Backend\Accounttypes;

use Illuminate\Queue\SerializesModels;

/**
 * Class AccounttypeCreated.
 */
class AccounttypeCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $accounttype;

    /**
     * @param $accounttype
     */
    public function __construct($accounttype)
    {
        $this->accounttype = $accounttype;
    }
}
