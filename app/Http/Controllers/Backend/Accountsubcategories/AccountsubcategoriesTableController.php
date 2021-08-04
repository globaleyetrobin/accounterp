<?php

namespace App\Http\Controllers\Backend\Accountsubcategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Accountsubcategories\ManageAccountsubcategoriesRequest;
use App\Repositories\Backend\AccountsubcategoriesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Accountsubcategory;

use App\Models\Accountcategory;

use App\Models\Accounttype;

/**
 * Class AccountsubcategoriesTableController.
 */
class AccountsubcategoriesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\AccountsubcategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Accountsubcategories\AccountsubcategoriesRepository $repository
     */
    public function __construct(AccountsubcategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Accountsubcategories\ManageAccountsubcategoriesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAccountsubcategoriesRequest $request)
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
                //return $category->account_type;

                return $result = Accounttype::select('name')->where('id',$category->account_type)->value('name');
            })
			  ->editColumn('parent_id', function ($category) {
				
			return $result = Accountcategory::select('name')->where('id',$category->parent_id)->value('name');
			
			//return $category;
                //return $category->created_at->toDateString();
            })
            ->editColumn('created_at', function ($category) {
				
				//return $result = Accountsubcategory::select('name')->where('id',5)->value('name');
                return $category->created_at->toDateString();
            })
            ->addColumn('actions', function ($category) {
                return $category->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
