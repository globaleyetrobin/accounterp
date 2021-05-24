<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Loans\LoanCreated;
use App\Events\Backend\Loans\LoanDeleted;
use App\Events\Backend\Loans\LoanUpdated;
use App\Exceptions\GeneralException;
use App\Models\Loan;
use App\Repositories\BaseRepository;

class LoansRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Loan::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
		'employee_id',
		
		'amount',
		
		'duration',
		
		'emi',
		
		'interest',
		
		'total_interest',
		
		'total_amount',
		
		'startdate',
		
		'enddate',
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
            ->leftjoin('users', 'users.id', '=', 'Loans.created_by')
			->leftjoin('employees', 'employees.id', '=', 'Loans.employee_id')
            ->select([
                'Loans.id',
                'Loans.name',
				//'Loans.employee_id',
                'Loans.status',
                'Loans.amount',
				'Loans.duration',
				'Loans.emi',
                'employees.name as employee_id',
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
            throw new GeneralException(__('exceptions.backend.Loan.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['created_by'] = auth()->user()->id;

        if ($Loan = Loan::create($input)) {
            event(new LoanCreated($Loan));

            return $Loan;
        }

        throw new GeneralException(__('exceptions.backend.Loan.create_error'));
    }

    /**
     * @param \App\Models\Loan $Loan
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Loan $Loan, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $Loan->id)->first()) {
            throw new GeneralException(__('exceptions.backend.Loan.already_exists'));
        }

        $input['status'] = $input['status'] ?? 0;
        $input['updated_by'] = auth()->user()->id;

        if ($Loan->update($input)) {
            event(new LoanUpdated($Loan));

            return $Loan->fresh();
        }

        throw new GeneralException(__('exceptions.backend.Loan.update_error'));
    }

    /**
     * @param \App\Models\Loan $Loan
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Loan $Loan)
    {
        if ($Loan->delete()) {
            event(new LoanDeleted($Loan));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.Loan.delete_error'));
    }
}
