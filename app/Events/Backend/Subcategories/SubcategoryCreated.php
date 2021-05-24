<?php

namespace App\Events\Backend\Subcategories;

use Illuminate\Queue\SerializesModels;

/**
 * Class SubcategoryCreated.
 */
class SubcategoryCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $subcategory;

    /**
     * @param $subcategory
     */
    public function __construct($subcategory)
    {
        $this->subcategory = $subcategory;
    }
}
