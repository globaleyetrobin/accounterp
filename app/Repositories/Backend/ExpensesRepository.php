<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Expenses\ExpenseCreated;
use App\Events\Backend\Expenses\ExpenseDeleted;
use App\Events\Backend\Expenses\ExpenseUpdated;
use App\Exceptions\GeneralException;
use App\Models\Expense;
use App\Repositories\BaseRepository;

class ExpensesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Expense::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
		'parent_id',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Retrieve List.
     *
     * @var array
     * @return Collection
     */
    public function retrieveList(array $options = [])
    {
        $perPage = isset($options['per_page']) ? (int) $options['per_page'] : 20;
        $orderBy = isset($options['order_by']) && in_array($options['order_by'], $this->sortable) ? $options['order_by'] : 'created_at';
        $order = isset($options['order']) && in_array($options['order'], ['asc', 'desc']) ? $options['order'] : 'desc';
        $query = $this->query()
            ->with([
                'creator',
                'updater',
            ])
            ->orderBy($orderBy, $order);

        if ($perPage == -1) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'expenses.created_by')
			//->where('expenses.parent_id', '=', null)
            ->select([
                'expenses.id',
                'expenses.name',
                 'expenses.date',
                 'expenses.amount',
				'expenses.parent_id',
                'expenses.status',
                'expenses.created_at',
                'users.first_name as created_by',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        if ($this->query()->where('name', $input['name'])->first()) {
            throw new GeneralException(__('exceptions.backend.expense.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Expense = Expense::create($input)) {
            event(new ExpenseCreated($Expense));

            return $Expense;
        }

        throw new GeneralException(__('exceptions.backend.expense.create_error'));
    }

    /**
     * @param \App\Models\Expense $Expense
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Expense $Expense, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Expense->id)->first()) {
            throw new GeneralException(__('exceptions.backend.expense.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Expense->update($input)) {
            event(new ExpenseUpdated($Expense));

            return $Expense->fresh();
        }

        throw new GeneralException(__('exceptions.backend.expense.update_error'));
    }

    /**
     * @param \App\Models\Expense $Expense
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Expense $Expense)
    {
        if ($Expense->delete()) {
            event(new ExpenseDeleted($Expense));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.expense.delete_error'));
    }
}
