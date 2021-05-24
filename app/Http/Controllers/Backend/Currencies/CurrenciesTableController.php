<?php

namespace App\Http\Controllers\Backend\Currencies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Currencies\ManageCurrenciesRequest;
use App\Repositories\Backend\CurrenciesRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Currency;

/**
 * Class CurrenciesTableController.
 */
class CurrenciesTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\CurrenciesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Currencies\CurrenciesRepository $repository
     */
    public function __construct(CurrenciesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Currencies\ManageCurrenciesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCurrenciesRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('currencies.status', (strtolower($keyword) == 'active') ? 1 : 0);
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
