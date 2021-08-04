<?php

namespace App\Events\Backend\Journels;

use Illuminate\Queue\SerializesModels;

/**
 * Class JournelUpdated.
 */
class JournelUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $journel;

    /**
     * @param $journel
     */
    public function __construct($journel)
    {
        $this->journel = $journel;
    }
}
