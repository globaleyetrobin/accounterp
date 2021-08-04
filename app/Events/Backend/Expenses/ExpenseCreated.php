<?php

namespace App\Events\Backend\Expenses;

use Illuminate\Queue\SerializesModels;

/**
 * Class ExpenseCreated.
 */
class ExpenseCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $expense;

    /**
     * @param $expense
     */
    public function __construct($expense)
    {
        $this->expense = $expense;
    }
}
