<?php

namespace App\Events\Backend\Accounttypes;

use Illuminate\Queue\SerializesModels;

/**
 * Class AccounttypeUpdated.
 */
class AccounttypeUpdated
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
