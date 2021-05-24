<?php

namespace App\Http\Controllers\Backend\Subcategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Subcategories\ManageSubcategoriesRequest;
use App\Repositories\Backend\SubcategoriesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Subcategory;

/**
 * Class SubcategoriesTableController.
 */
class SubcategoriesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\SubcategoriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Subcategories\SubcategoriesRepository $repository
     */
    public function __construct(SubcategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Subcategories\ManageSubcategoriesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSubcategoriesRequest $request)
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
                return $category->status_label;
            })
			  ->editColumn('parent_id', function ($category) {
				
			return $result = Subcategory::select('name')->where('id',$category->parent_id)->value('name');
			
			//return $category;
                //return $category->created_at->toDateString();
            })
            ->editColumn('created_at', function ($category) {
				
				//return $result = Subcategory::select('name')->where('id',5)->value('name');
                return $category->created_at->toDateString();
            })
            ->addColumn('actions', function ($category) {
                return $category->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
