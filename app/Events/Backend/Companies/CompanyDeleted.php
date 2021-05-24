<?php

namespace App\Events\Backend\Companies;

use Illuminate\Queue\SerializesModels;

/**
 * Class CompanyDeleted.
 */
class CompanyDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $company;

    /**
     * @param $blogcategory
     */
    public function __construct($company)
    {
        $this->company = $company;
    }
}
