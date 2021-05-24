<?php

namespace App\Events\Backend\Units;

use Illuminate\Queue\SerializesModels;

/**
 * Class UnitUpdated.
 */
class UnitUpdated
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
