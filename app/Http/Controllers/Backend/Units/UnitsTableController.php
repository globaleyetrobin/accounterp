<?php

namespace App\Http\Controllers\Backend\Units;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Units\ManageUnitsRequest;
use App\Repositories\Backend\UnitsRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Unit;

/**
 * Class UnitsTableController.
 */
class UnitsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\UnitsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Units\UnitsRepository $repository
     */
    public function __construct(UnitsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Units\ManageUnitsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageUnitsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('Units.status', (strtolower($keyword) == 'active') ? 1 : 0);
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
