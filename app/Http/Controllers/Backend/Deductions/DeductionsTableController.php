<?php

namespace App\Http\Controllers\Backend\Deductions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Deductions\ManageDeductionsRequest;
use App\Repositories\Backend\DeductionsRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Deduction;

/**
 * Class DeductionsTableController.
 */
class DeductionsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\DeductionsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Deductions\DeductionsRepository $repository
     */
    public function __construct(DeductionsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Deductions\ManageDeductionsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageDeductionsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('Deductions.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($category) {
                return $category->status_label;
            })
		
            ->editColumn('created_at', function ($category) {
				
				//return $result = Category::select('name')->where('id',5)->value('name');
                return $category->created_at->toDateString();
            })
            ->addColumn('actions', function ($category) {
                return $category->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
