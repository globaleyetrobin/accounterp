<?php
namespace App\Http\Controllers\Backend\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Employees\CreateEmployeesRequest;
use App\Http\Requests\Backend\Employees\DeleteEmployeesRequest;
use App\Http\Requests\Backend\Employees\ManageEmployeesRequest;
use App\Http\Requests\Backend\Employees\StoreEmployeesRequest;
use App\Http\Requests\Backend\Employees\UpdateEmployeesRequest;
use App\Http\Responses\Backend\Employees\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Employee;

use App\Models\Company;


use App\Models\Salary;


use App\Models\Salaryallowance;


use App\Models\Salarydeduction;


use App\Repositories\Backend\EmployeesRepository;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;


class EmployeesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\EmployeesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\EmployeesRepository $repository
     */
    public function __construct(EmployeesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['employees']);
    }

    /**
     * @param \App\Http\Requests\Backend\Employees\ManageEmployeesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageEmployeesRequest $request)
    {
		
        //return new ViewResponse('backend.employees.index');
		
		
		  return new ViewResponse('backend.employees.index');
    }

    public function salary(ManageEmployeesRequest $request, Employee $Employee)
    {
		
        //return new ViewResponse('backend.employees.index');
		
		$allowances = \DB::table('allowances')->get();
		
		
		
		
		$deductions = \DB::table('deductions')->get();
		
		$employee_id=$request->id;
		
		
		
		
		$employee_details = Employee::select(
                'employees.id',
                'employees.name'
				
        )
        ->where('employees.id',$request->id)->first();
		
		
		
		
		
		$salary =  \DB::table('salary')->where('employee_id',$request->id)->first();
		
		
		if($salary)
		{
		$salary_allowances =  \DB::table('salary_allowances')->where('salary_id',$salary->id)->get();
		
		$salary_allowancedata=array();
		foreach($salary_allowances as $salary_allowance)
		{
			
			
			$salary_allowancedata[$salary_allowance->allowance_id]=$salary_allowance->amount;
			
		}
		
	
		$salary_deductions =  \DB::table('salary_deductions')->where('salary_id',$salary->id)->get();
		
		$salary_deductiondata=array();
		foreach($salary_deductions as $salary_deduction)
		{
			
			
			$salary_deductiondata[$salary_deduction->deduction_id]=$salary_deduction->amount;
			
		}
		
		
		}
		else
		{
			$salary_allowancedata = '';
			$salary_deductiondata ='';
		}
		
		
		
		

		
		

        return view('backend.employees.salary', ['allowances' => $allowances,
		'deductions' => $deductions,
		
		'salary' => $salary,
		
		'salary_allowances' => $salary_allowancedata,
		
		'salary_deductions' => $salary_deductiondata,
		
		
		'employee_id' => $employee_id,
		'employee' => $employee_details
		]);
		
		
		//return new ViewResponse('backend.employees.salary');
    }
	
	 public function savesalary(ManageEmployeesRequest $request, Employee $Employee)
    {
		
		$basic_salary=$request->basic_salary;
		
		$employee_id=$request->employee_id;
		
		$userid =auth()->user()->id;
		
		$total_allowance=$request->total_allowance;
		$total_deduction=$request->total_deduction;
		$net_salary=$request->net_salary;
		
		$allowance=$request->allowance;
		
		$deduction=$request->deduction;
		
		$salary_id=$request->salary_id;
		
		if($salary_id !='')
		{
			Salary::where('id', $salary_id)
       ->update([
           'basic_salary' => $basic_salary,
		   'total_allowance' => $total_allowance,
		   'total_deduction' => $total_deduction,
		   'net_salary' => $net_salary
        ]);
		
		
		
		//DB::table('salary_allowances')->where('salary_id', $salary_id)->delete();

       // DB::table('salary_deductions')->where('salary_id', $salary_id)->delete();
	   
	   /*$check_allowance=Salaryallowance::where('salary_id',$salary_id)->get();
	   
	   $check_deduction=Salarydeduction::where('salary_id',$salary_id)->get();
	   
	  
	   if(count($check_allowance) !=0)
	   {
	   Salaryallowance::where('salary_id',$salary_id)->delete();
	   }
	   
	   if(count($check_deduction) !=0)
	   {
		   exit;
	   Salarydeduction::where('salary_id',$salary_id)->delete();
	   }
	   */



        	foreach($allowance as $key => $value)
		{
                 
		
        Salaryallowance::where('salary_id', $salary_id)->where('allowance_id', $key)
       ->update([
           'amount' => $value
        ]);
		
		
          
        }
		
		foreach($deduction as $key => $value)
		{
               
	     Salarydeduction::where('salary_id', $salary_id)->where('deduction_id', $key)
       ->update([
           'amount' => $value
        ]);

		
		
		
          
        }

		return new RedirectResponse(route('admin.employees.index'), ['flash_success' => __('employee salary Updated Sucessfully')]);
		
		}
		
		else
		{
	
		
		
		
		$salary = new Salary;
        $salary->employee_id = $employee_id;
        $salary->basic_salary = $basic_salary;
        $salary->total_allowance = $total_allowance;
		$salary->total_deduction = $total_deduction;
		$salary->net_salary = $net_salary;
		
		$salary->created_by = $userid;
		
        $salary_id=$salary->save();
		
		
		
			   
		
		
		
		foreach($allowance as $key => $value)
		{
                 
				 
		$salary_allowance = new Salaryallowance;
        $salary_allowance->salary_id = $salary_id;
        $salary_allowance->allowance_id = $key;
        $salary_allowance->amount = $value;
		
		$salary->employee_id = $employee_id;
		
		
		$salary_allowance->created_by = $userid;
		
        $salary_allowance->save();
          
        }
		
		foreach($deduction as $key => $value)
		{
               
			   
		$salary_deduction = new Salarydeduction;
        $salary_deduction->salary_id = $salary_id;
        $salary_deduction->deduction_id = $key;
        $salary_deduction->amount = $value;
		
		$salary->employee_id = $employee_id; 
		$salary_deduction->created_by = $userid;
		
        $salary_deduction->save();
		
          
        }
		
		
		
		
		return new RedirectResponse(route('admin.employees.index'), ['flash_success' => __('employee salary created')]);
		}
		
        //return new ViewResponse('backend.employees.index');
		
		
		
		//return new ViewResponse('backend.employees.salary');
    }
	
	
    /**
     * @param \App\Http\Requests\Backend\Employees\CreateEmployeesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateEmployeesRequest $request)
    {
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
		
		
        return new ViewResponse('backend.employees.create' , ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\Employees\StoreEmployeesRequest  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreEmployeesRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.employees.index'), ['flash_success' => __('alerts.backend.employee.created')]);
    }

    /**
     * @param \App\Models\Employee $Employee
     * @param \App\Http\Requests\Backend\Employees\ManageEmployeesRequest $request
     *
     * @return \App\Http\Responses\Backend\Employee\EditResponse
     */
    public function edit(Employee $Employee, ManageEmployeesRequest $request)
    {
		
		$companies = Company::getSelectData();
		
       $companies = collect(['' => 'Select Company'] + $companies);
        return new EditResponse($Employee,$companies);
    }

    /**
     * @param \App\Models\Employee $Employee
     * @param \App\Http\Requests\Backend\Employees\UpdateEmployeesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Employee $Employee, UpdateEmployeesRequest $request)
    {
        $this->repository->update($Employee, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.employees.index'), ['flash_success' => __('alerts.backend.employee.updated')]);
    }

    /**
     * @param \App\Models\Employee $Employee
     * @param \App\Http\Requests\Backend\Employees\DeleteEmployeesRequest $request
     *
     * @return mixed
     */
    public function destroy(Employee $Employee, DeleteEmployeesRequest $request)
    {
        $this->repository->delete($Employee);

        return new RedirectResponse(route('admin.employees.index'), ['flash_success' => __('alerts.backend.employee.deleted')]);
    }
}
