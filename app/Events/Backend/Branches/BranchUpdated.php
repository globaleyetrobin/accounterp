<?php

namespace App\Events\Backend\Branches;

use Illuminate\Queue\SerializesModels;

/**
 * Class branchUpdated.
 */
class BranchUpdated
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
