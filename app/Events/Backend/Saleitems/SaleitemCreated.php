<?php

namespace App\Events\Backend\Saleitems;

use Illuminate\Queue\SerializesModels;

/**
 * Class SaleCreated.
 */
class SaleitemCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $saleitems;

    /**
     * @param $saleitems
     */
    public function __construct($saleitems)
    {
        $this->saleitems = $saleitems;
    }
}
