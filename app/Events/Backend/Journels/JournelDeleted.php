<?php

namespace App\Events\Backend\Journels;

use Illuminate\Queue\SerializesModels;

/**
 * Class JournelDeleted.
 */
class JournelDeleted
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
