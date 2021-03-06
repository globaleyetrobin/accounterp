<?php

namespace App\Events\Backend\Assets;

use Illuminate\Queue\SerializesModels;

/**
 * Class AssetUpdated.
 */
class AssetUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $asset;

    /**
     * @param $asset
     */
    public function __construct($asset)
    {
        $this->asset = $asset;
    }
}
