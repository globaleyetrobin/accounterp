<?php

namespace App\Events\Backend\Branches;

use Illuminate\Queue\SerializesModels;

/**
 * Class branchCreated.
 */
class BranchCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $branch;

    /**
     * @param $blogcategory
     */
    public function __construct($branch)
    {
        $this->branch = $branch;
    }
}
