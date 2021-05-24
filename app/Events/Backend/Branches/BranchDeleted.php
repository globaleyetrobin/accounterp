<?php

namespace App\Events\Backend\Branches;

use Illuminate\Queue\SerializesModels;

/**
 * Class branchDeleted.
 */
class BranchDeleted
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
