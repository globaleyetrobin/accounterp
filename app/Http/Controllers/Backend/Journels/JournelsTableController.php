<?php

namespace App\Http\Controllers\Backend\Journels;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Journels\ManageJournelsRequest;
use App\Repositories\Backend\JournelsRepository;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Journel;

use App\Models\Accountcategory;

use App\Models\Accountsubcategory;

use App\Models\Accounttype;

/**
 * Class JournelsTableController.
 */
class JournelsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\JournelsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\Journels\JournelsRepository $repository
     */
    public function __construct(JournelsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Journels\ManageJournelsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageJournelsRequest $request)
    {
         return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('Journels.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
           

      
         
            ->editColumn('journel_type', function ($category) {
                
                return $result = Accounttype::select('name')->where('id',$category->journel_type)->value('name');
                //return $category->date;
            })

             ->editColumn('journel_category', function ($category) {
                
                return $result = Accountcategory::select('name')->where('id',$category->journel_category)->value('name');
                //return $category->date;
            })

              ->editColumn('journel_subcategory', function ($category) {
                
                return $result = Accountsubcategory::select('name')->where('id',$category->journel_subcategory)->value('name');
                //return $category->date;
            })


        


            ->addColumn('actions', function ($category) {
                return $category->action_buttons;
            })
            ->escapeColumns(['name'])
            ->make(true);
    }
}
