<?php

namespace App\Http\Controllers\Backend\Loans;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Loans\CreateLoansRequest;
use App\Http\Requests\Backend\Loans\DeleteLoansRequest;
use App\Http\Requests\Backend\Loans\ManageLoansRequest;
use App\Http\Requests\Backend\Loans\StoreLoansRequest;
use App\Http\Requests\Backend\Loans\UpdateLoansRequest;
use App\Http\Responses\Backend\Loans\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Loan;
use App\Models\Employee;
use App\Repositories\Backend\LoansRepository;
use Illuminate\Support\Facades\View;

class LoansController extends Controller
{
    /**
     * @var \App\Repositories\Backend\LoansRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\LoansRepository $repository
     */
    public function __construct(LoansRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['loans']);
    }

    /**
     * @param \App\Http\Requests\Backend\Loans\ManageLoansRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageLoansRequest $request)
    {
		
		
        return new ViewResponse('backend.loans.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Loans\CreateLoansRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateLoansRequest $request)
    {
		
		
		$employee = Employee::getSelectData();
		
        $employee = collect(['' => 'Select Employee'] + $employee);
		
		
        return new ViewResponse('backend.loans.create' , ['employee' => $employee]);
		
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Loans\StoreLoansRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreLoansRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.loans.index'), ['flash_success' => __('alerts.backend.loan.created')]);
    }

    /**
     * @param \App\Models\loan $Loan
     * @param \App\Http\Requests\Backend\Loans\ManageLoansRequest $request
     *
     * @return \App\Http\Responses\Backend\loan\EditResponse
     */
    public function edit(Loan $Loan, ManageLoansRequest $request)
    {
		
	
		$employee = Employee::getSelectData();
		
        $employee = collect(['' => 'Select Employee'] + $employee);
		
        return new EditResponse($Loan,$employee);
    }

    /**
     * @param \App\Models\loan $Loan
     * @param \App\Http\Requests\Backend\Loans\UpdateLoansRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Loan $Loan, UpdateLoansRequest $request)
    {
        $this->repository->update($Loan, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.loans.index'), ['flash_success' => __('alerts.backend.loan.updated')]);
    }

    /**
     * @param \App\Models\loan $Loan
     * @param \App\Http\Requests\Backend\Loans\DeleteLoansRequest $request
     *
     * @return mixed
     */
    public function destroy(Loan $Loan, DeleteLoansRequest $request)
    {
        $this->repository->delete($Loan);

        return new RedirectResponse(route('admin.loans.index'), ['flash_success' => __('alerts.backend.loan.deleted')]);
    }
	
	
	
	public function emi(ManageLoansRequest $request, Loan $loan)
    {
		
	
	  $loans = Loan::select(
                'loans.id',
                'loans.name',
				//'Loans.employee_id',
                'loans.status',
                'loans.amount',
				'loans.duration',
				'loans.startdate',
				'loans.emi',
             'employees.name as employee_id',
        )
        ->leftjoin('employees', 'employees.id', '=', 'loans.employee_id')
    
        ->where('loans.id',$request->id)->first();
		
		
		
        return view('backend.loans.emipay')
            ->withLoans($loans);
    }
	
	public function emilist(ManageLoansRequest $request, Loan $loan)
    {
		
	  $loans = Loan::select(
                'loans.id',
                'loans.name',
				//'Loans.employee_id',
                'loans.status',
                'loans.amount',
				'loans.duration',
				'loans.startdate',
				'loans.emi',
             'employees.name as employee_id',
        )
        ->leftjoin('employees', 'employees.id', '=', 'loans.employee_id')
    
        ->where('loans.id',$request->id)->first();
		
		
		
        return view('backend.loans.emilist')
            ->withLoans($loans);
    }

	
	
	public function  emistore(ManageLoansRequest $request)
	{
		
		print_r($request->loanid);
		exit;
	}
	
	
}
