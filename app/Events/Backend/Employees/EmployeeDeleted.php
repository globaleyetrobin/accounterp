<?php

namespace App\Events\Backend\Employees;

use Illuminate\Queue\SerializesModels;

/**
 * Class employeeDeleted.
 */
class EmployeeDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $employee;

    /**
     * @param $blogcategory
     */
    public function __construct($employee)
    {
        $this->employee = $employee;
    }
}
