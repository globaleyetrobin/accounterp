<?php

namespace App\Http\Controllers\Backend\Accountcategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Accountcategories\ManageAccountcategoriesRequest;
use App\Repositories\Backend\AccountcategoriesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Accountcategory;

use App\Models\Accounttype;

/**
 * Class AccountcategoriesTableController.
 */
class AccountcategoriesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AccountcategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Accountcategories\AccountcategoriesRepository $repository
     */
    public function __construct(AccountcategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Accountcategories\ManageAccountcategoriesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAccountcategoriesRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('categories.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($category) {
                return $category->account_type;
            })
			  ->editColumn('parent_id', function ($category) {
				
			return $result = Accounttype::select('name')->where('id',$category->parent_id)->value('name');
			
			//return $category;
                //return $category->created_at->toDateString();
            })
            ->editColumn('created_at', function ($category) {
				
				//return $result = Accountcategory::select('name')->where('id',5)->value('name');
                return $category->created_at->toDateString();
            })
            ->addColumn('actions', function ($category) {
                return $category->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
