<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Salereturns\SalereturnCreated;
use App\Events\Backend\Salereturns\SalereturnDeleted;
use App\Events\Backend\Salereturns\SalereturnUpdated;
use App\Exceptions\GeneralException;
use App\Models\Salereturn;
use App\Models\Category;

use App\Models\Salereturnitem;


/*
use App\Events\Backend\Salereturnitems\SalereturnitemCreated;
use App\Events\Backend\Salereturnitems\SalereturnitemDeleted;
use App\Events\Backend\Salereturnitems\SalereturnitemUpdated;

*/


use App\Events\Backend\Salereturnitems\SalereturnitemCreated;


use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SalereturnsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Salereturn::class;

    protected $upload_path;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'salereturn_no',
        'salereturn_date',
        'salereturn_company',
        'salereturn_branch',
        'salereturn_customer',
        'salereturn_image',
        'salereturn_notes',
        'salereturn_amount',
        'salereturn_discounttype',
        'salereturn_discountamount',
        'salereturn_discounttotal',
        'salereturn_taxtype',
        'salereturn_taxamount',
        'salereturn_netamount',
         'status',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Storage Class Object.
     *
     * @var \Illuminate\Support\Facades\Storage
     */
    protected $storage;

    public function __construct()
    {
        $this->upload_path = 'img'.DIRECTORY_SEPARATOR.'salereturn'.DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }

    /**
     * Retrieve List.
     *
     * @var array
     * @return Collection
     */
    public function retrieveList(array $options = [])
    {
        $perPage = isset($options['per_page']) ? (int) $options['per_page'] : 20;
        $orderBy = isset($options['order_by']) && in_array($options['order_by'], $this->sortable) ? $options['order_by'] : 'created_at';
        $order = isset($options['order']) && in_array($options['order'], ['asc', 'desc']) ? $options['order'] : 'desc';
        $query = $this->query()
            ->with([
                'owner',
                'updater',
            ])
            ->orderBy($orderBy, $order);

        if ($perPage == -1) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'salereturns.created_by')
            ->select([
			'salereturns.id',
                'salereturns.salereturn_no',
        'salereturns.salereturn_date',
        'salereturns.salereturn_company',
        'salereturns.salereturn_branch',
        'salereturns.salereturn_customer',
        'salereturns.salereturn_image',
        'salereturns.salereturn_notes',
        'salereturns.salereturn_amount',
        'salereturns.salereturn_discounttype',
        'salereturns.salereturn_discountamount',
        'salereturns.salereturn_discounttotal',
        'salereturns.salereturn_taxtype',
        'salereturns.salereturn_taxamount',
        'salereturns.salereturn_netamount',
         'salereturns.status',
                
                'salereturns.created_by',
                'salereturns.created_at',
                'users.first_name as user_name',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
      
      // robingnanaraj adding the salereturn items logic
        return DB::transaction(function () use ($input) {

           
            $input['created_by'] = auth()->user()->id;

            $input = $this->uploadImage($input);
			
			
		
			
			
			
			
		
			/*
			$Salereturnitem = new Salereturnitem;
			
			
                $Salereturnitem->salereturn_id = $salereturn_items['salereturn_id'];
                $Salereturnitem->salereturnitems_name = $salereturn_items['salereturnitems_name'];
				$Salereturnitem->salereturnitems_quantity = $salereturn_items['salereturnitems_quantity'];
				$Salereturnitem->salereturnitems_price = $salereturn_items['salereturnitems_price'];
				
				$Salereturnitem->salereturnitems_actual_amount = $salereturn_items['salereturnitems_actual_amount'];
                $Salereturnitem->salereturnitems_discount_rate = $salereturn_items['salereturnitems_discount_rate'];
				$Salereturnitem->salereturnitems_discount_amount = $salereturn_items['salereturnitems_discount_amount'];
				$Salereturnitem->salereturnitems_final_amount = $salereturn_items['salereturnitems_final_amount'];
				
				
				
				
				
				$ids=$Salereturnitem->save();
			
			*/
			
			
			
			
			
			
            
            if ($salereturn = Salereturn::create($input)) {
                
				
				
                event(new SalereturnCreated($salereturn));
				
				
			$items_count=count($input['salereturnitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        $salereturn_items['salereturn_id']               =      $salereturn->id;
				        $salereturn_items['salereturnitems_name']               =$input['salereturnitems_name'][$i];
				
				        $salereturn_items['salereturnitems_quantity']          =$input['salereturnitems_quantity'][$i];

                        $salereturn_items['salereturnitems_type']          =$input['salereturnitems_type'][$i];


						$salereturn_items['salereturnitems_price']             =$input['salereturnitems_price'][$i];
						$salereturn_items['salereturnitems_actual_amount']     =$input['salereturnitems_actual_amount'][$i];
						$salereturn_items['salereturnitems_discount_rate']     =$input['salereturnitems_discount_rate'][$i];
						
						$salereturn_items['salereturnitems_discount_amount']   =$input['salereturnitems_discount_amount'][$i];
						
						$salereturn_items['salereturnitems_final_amount']      =$input['salereturnitems_final_amount'][$i];
						
						 if ($salereturnitems = Salereturnitem::create($salereturn_items))
							 {
                
                              event(new SalereturnitemCreated($salereturnitems));
               
                            }
			
			}
			
			
			  
               
    
                return $salereturn;
            }

            throw new GeneralException(__('exceptions.backend.salereturns.create_error'));
        });
    }

    /**
     * @param \App\Models\Salereturn $salereturn
     * @param array $input
     */
    public function update(Salereturn $salereturn, array $input)
    {
       
        $input['updated_by'] = auth()->user()->id;
        

        // Uploading Image
        if (array_key_exists('salereturn_image', $input)) {
            $this->deleteOldFile($salereturn);
            $input = $this->uploadImage($input);
        }

        return DB::transaction(function () use ($salereturn, $input) {
            if ($salereturn->update($input)) {
                // Updateing associated category's id in mapper table
            
                Salereturnitem::where('salereturn_id', $salereturn->id)->forceDelete();
				
				
             
                event(new SalereturnUpdated($salereturn));
				
				$items_count=count($input['salereturnitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        if($input['salereturnitems_name'][$i] !='')
                        {							
				        $salereturn_items['salereturn_id']               =      $salereturn->id;
				        $salereturn_items['salereturnitems_name']               =$input['salereturnitems_name'][$i];

                        $salereturn_items['salereturnitems_type']          =$input['salereturnitems_type'][$i];
				
				        $salereturn_items['salereturnitems_quantity']          =$input['salereturnitems_quantity'][$i];
						$salereturn_items['salereturnitems_price']             =$input['salereturnitems_price'][$i];
						$salereturn_items['salereturnitems_actual_amount']     =$input['salereturnitems_actual_amount'][$i];
						$salereturn_items['salereturnitems_discount_rate']     =$input['salereturnitems_discount_rate'][$i];
						
						$salereturn_items['salereturnitems_discount_amount']   =$input['salereturnitems_discount_amount'][$i];
						
						$salereturn_items['salereturnitems_final_amount']      =$input['salereturnitems_final_amount'][$i];
						
						 if ($salereturnitems = Salereturnitem::create($salereturn_items))
							 {
                
                              event(new SalereturnitemCreated($salereturnitems));
               
                            }
						}
						
			
			}
			
			

                return $salereturn->fresh();
            }

            throw new GeneralException(__('exceptions.backend.salereturns.update_error'));
        });
    }

 
    
    /**
     * @param \App\Models\Salereturns\Salereturn $salereturn
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Salereturn $salereturn)
    {
       /* DB::transaction(function () use ($salereturn) {
            if ($salereturn->delete()) {
                
                event(new SalereturnDeleted($salereturn));

                return true;
            }

            throw new GeneralException(__('exceptions.backend.salereturns.delete_error'));
        });
		*/
		Salereturn::where('id', $salereturn->id)->delete();
		Salereturnitem::where('salereturn_id', $salereturn->id)->delete();
		return true;

    }

    /**
     * Upload Image.
     *
     * @param array $input
     *
     * @return array $input
     */
    public function uploadImage($input)
    {
        if (isset($input['salereturn_image']) && ! empty($input['salereturn_image'])) {
            $avatar = $input['salereturn_image'];
            $fileName = time().$avatar->getClientOriginalName();

            

            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getRealPath()));

            

            $input = array_merge($input, ['salereturn_image' => $fileName]);
        }

        return $input;
    }

    /**
     * Destroy Old Image.
     *
     * @param int $id
     */
    public function deleteOldFile($model)
    {
        $fileName = $model->salereturn_image;

        return $this->storage->delete($this->upload_path.$fileName);
    }
}
