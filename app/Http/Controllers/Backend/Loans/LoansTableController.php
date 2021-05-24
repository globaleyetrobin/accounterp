<?php

namespace App\Http\Controllers\Backend\Loans;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Loans\ManageLoansRequest;
use App\Repositories\Backend\LoansRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Loan;

/**
 * Class LoansTableController.
 */
class LoansTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\LoansRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Loans\LoansRepository $repository
     */
    public function __construct(LoansRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Loans\ManageLoansRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageLoansRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('Loans.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($loan) {
                return $loan->status_label;
            })
		
           /* ->editColumn('created_at', function ($category) {
				
				//return $result = Category::select('name')->where('id',5)->value('name');
                return $category->created_at->toDateString();
            })
			*/
            ->addColumn('actions', function ($loan) {
                return $loan->action_buttons;
            })
			
            ->escapeColumns(['name'])
            ->make(true);
    }
}
