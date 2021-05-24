
<?php

namespace App\Events\Backend\Companies;

use Illuminate\Queue\SerializesModels;

/**
 * Class CompanyCreated.
 */
class CompanyCreated
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
