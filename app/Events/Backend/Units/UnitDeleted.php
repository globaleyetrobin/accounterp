<?php

namespace App\Events\Backend\Units;

use Illuminate\Queue\SerializesModels;

/**
 * Class UnitDeleted.
 */
class UnitDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $unit;

    /**
     * @param $unit
     */
    public function __construct($unit)
    {
        $this->unit = $unit;
    }
}
