<?php

namespace App\Http\Controllers\Backend\Brands;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Brands\ManageBrandsRequest;
use App\Repositories\Backend\BrandsRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Brand;

/**
 * Class BrandsTableController.
 */
class BrandsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\BrandsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Brands\BrandsRepository $repository
     */
    public function __construct(BrandsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Brands\ManageBrandsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBrandsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('brands.status', (strtolower($keyword) == 'active') ? 1 : 0);
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
