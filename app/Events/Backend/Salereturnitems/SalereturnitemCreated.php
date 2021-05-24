<?php

namespace App\Events\Backend\Salereturnitems;

use Illuminate\Queue\SerializesModels;

/**
 * Class SalereturnCreated.
 */
class SalereturnitemCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $salereturnitems;

    /**
     * @param $salereturnitems
     */
    public function __construct($salereturnitems)
    {
        $this->salereturnitems = $salereturnitems;
    }
}
