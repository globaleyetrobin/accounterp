<?php

namespace App\Events\Backend\Journels;

use Illuminate\Queue\SerializesModels;

/**
 * Class JournelCreated.
 */
class JournelCreated
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
