<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Purchasereturns\PurchasereturnCreated;
use App\Events\Backend\Purchasereturns\PurchasereturnDeleted;
use App\Events\Backend\Purchasereturns\PurchasereturnUpdated;
use App\Exceptions\GeneralException;
use App\Models\Purchasereturn;
use App\Models\Category;

use App\Models\Purchasereturnitem;


/*
use App\Events\Backend\Purchasereturnitems\PurchasereturnitemCreated;
use App\Events\Backend\Purchasereturnitems\PurchasereturnitemDeleted;
use App\Events\Backend\Purchasereturnitems\PurchasereturnitemUpdated;

*/


use App\Events\Backend\Purchasereturnitems\PurchasereturnitemCreated;


use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PurchasereturnsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Purchasereturn::class;

    protected $upload_path;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'purchasereturn_no',
        'purchasereturn_date',
        'purchasereturn_company',
        'purchasereturn_branch',
        'purchasereturn_supplier',
        'purchasereturn_image',
        'purchasereturn_notes',
        'purchasereturn_amount',
        'purchasereturn_discounttype',
        'purchasereturn_discountamount',
        'purchasereturn_discounttotal',
        'purchasereturn_taxtype',
        'purchasereturn_taxamount',
        'purchasereturn_netamount',
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
        $this->upload_path = 'img'.DIRECTORY_SEPARATOR.'purchasereturn'.DIRECTORY_SEPARATOR;
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
            ->leftjoin('users', 'users.id', '=', 'purchasereturns.created_by')
            ->select([
			'purchasereturns.id',
                'purchasereturns.purchasereturn_no',
        'purchasereturns.purchasereturn_date',
        'purchasereturns.purchasereturn_company',
        'purchasereturns.purchasereturn_branch',
        'purchasereturns.purchasereturn_supplier',
        'purchasereturns.purchasereturn_image',
        'purchasereturns.purchasereturn_notes',
        'purchasereturns.purchasereturn_amount',
        'purchasereturns.purchasereturn_discounttype',
        'purchasereturns.purchasereturn_discountamount',
        'purchasereturns.purchasereturn_discounttotal',
        'purchasereturns.purchasereturn_taxtype',
        'purchasereturns.purchasereturn_taxamount',
        'purchasereturns.purchasereturn_netamount',
         'purchasereturns.status',
                
                'purchasereturns.created_by',
                'purchasereturns.created_at',
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
      
      // robingnanaraj adding the purchasereturn items logic
        return DB::transaction(function () use ($input) {

           
            $input['created_by'] = auth()->user()->id;

            $input = $this->uploadImage($input);
			
			
		
			
			
			
			
		
			/*
			$Purchasereturnitem = new Purchasereturnitem;
			
			
                $Purchasereturnitem->purchasereturn_id = $purchasereturn_items['purchasereturn_id'];
                $Purchasereturnitem->purchasereturnitems_name = $purchasereturn_items['purchasereturnitems_name'];
				$Purchasereturnitem->purchasereturnitems_quantity = $purchasereturn_items['purchasereturnitems_quantity'];
				$Purchasereturnitem->purchasereturnitems_price = $purchasereturn_items['purchasereturnitems_price'];
				
				$Purchasereturnitem->purchasereturnitems_actual_amount = $purchasereturn_items['purchasereturnitems_actual_amount'];
                $Purchasereturnitem->purchasereturnitems_discount_rate = $purchasereturn_items['purchasereturnitems_discount_rate'];
				$Purchasereturnitem->purchasereturnitems_discount_amount = $purchasereturn_items['purchasereturnitems_discount_amount'];
				$Purchasereturnitem->purchasereturnitems_final_amount = $purchasereturn_items['purchasereturnitems_final_amount'];
				
				
				
				
				
				$ids=$Purchasereturnitem->save();
			
			*/
			
			
			
			
			
			
			
            
            if ($purchasereturn = Purchasereturn::create($input)) {
                
				echo "step1";
				exit;
				
                event(new PurchasereturnCreated($purchasereturn));
				
				
				
				
			$items_count=count($input['purchasereturnitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        $purchasereturn_items['purchasereturn_id']               =      $purchasereturn->id;
				        $purchasereturn_items['purchasereturnitems_name']               =$input['purchasereturnitems_name'][$i];
						
						$purchasereturn_items['purchasereturnitems_name']               =$input['purchasereturnitems_name'][$i];
						
						$purchasereturn_items['purchasereturnitems_cat']               =$input['purchasereturnitems_cat'][$i];
						
						$purchasereturn_items['purchasereturnitems_subcat']               =$input['purchasereturnitems_subcat'][$i];
						
						
				
				        $purchasereturn_items['purchasereturnitems_quantity']          =$input['purchasereturnitems_quantity'][$i];
						$purchasereturn_items['purchasereturnitems_price']             =$input['purchasereturnitems_price'][$i];
						$purchasereturn_items['purchasereturnitems_actual_amount']     =$input['purchasereturnitems_actual_amount'][$i];
						$purchasereturn_items['purchasereturnitems_discount_rate']     =$input['purchasereturnitems_discount_rate'][$i];
						
						$purchasereturn_items['purchasereturnitems_discount_amount']   =$input['purchasereturnitems_discount_amount'][$i];
						
						$purchasereturn_items['purchasereturnitems_final_amount']      =$input['purchasereturnitems_final_amount'][$i];
						
						 if ($purchasereturnitems = Purchasereturnitem::create($purchasereturn_items))
							 {
                
                              event(new PurchasereturnitemCreated($purchasereturnitems));
               
                            }
			
			}
			
			
			  
               
    
                return $purchasereturn;
            }

            throw new GeneralException(__('exceptions.backend.purchasereturns.create_error'));
        });
    }

    /**
     * @param \App\Models\Purchasereturn $purchasereturn
     * @param array $input
     */
    public function update(Purchasereturn $purchasereturn, array $input)
    {
       
        $input['updated_by'] = auth()->user()->id;
        

        // Uploading Image
        if (array_key_exists('purchasereturn_image', $input)) {
            $this->deleteOldFile($purchasereturn);
            $input = $this->uploadImage($input);
        }

        return DB::transaction(function () use ($purchasereturn, $input) {
            if ($purchasereturn->update($input)) {
                // Updateing associated category's id in mapper table
            
                Purchasereturnitem::where('purchasereturn_id', $purchasereturn->id)->forceDelete();
				
				
             
                event(new PurchasereturnUpdated($purchasereturn));
				
				$items_count=count($input['purchasereturnitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        if($input['purchasereturnitems_name'][$i] !='')
                        {							
				        $purchasereturn_items['purchasereturn_id']               =      $purchasereturn->id;
				        $purchasereturn_items['purchasereturnitems_name']               =$input['purchasereturnitems_name'][$i];
						
						$purchasereturn_items['purchasereturnitems_cat']               =$input['purchasereturnitems_cat'][$i];
						
						$purchasereturn_items['purchasereturnitems_subcat']               =$input['purchasereturnitems_subcat'][$i];
						
						
				
				        $purchasereturn_items['purchasereturnitems_quantity']          =$input['purchasereturnitems_quantity'][$i];
						$purchasereturn_items['purchasereturnitems_price']             =$input['purchasereturnitems_price'][$i];
						$purchasereturn_items['purchasereturnitems_actual_amount']     =$input['purchasereturnitems_actual_amount'][$i];
						$purchasereturn_items['purchasereturnitems_discount_rate']     =$input['purchasereturnitems_discount_rate'][$i];
						
						$purchasereturn_items['purchasereturnitems_discount_amount']   =$input['purchasereturnitems_discount_amount'][$i];
						
						$purchasereturn_items['purchasereturnitems_final_amount']      =$input['purchasereturnitems_final_amount'][$i];
						
						 if ($purchasereturnitems = Purchasereturnitem::create($purchasereturn_items))
							 {
                
                              event(new PurchasereturnitemCreated($purchasereturnitems));
               
                            }
						}
						
			
			}
			
			

                return $purchasereturn->fresh();
            }

            throw new GeneralException(__('exceptions.backend.purchasereturns.update_error'));
        });
    }

 
    
    /**
     * @param \App\Models\Purchasereturns\Purchasereturn $purchasereturn
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Purchasereturn $purchasereturn)
    {
       /* DB::transaction(function () use ($purchasereturn) {
            if ($purchasereturn->delete()) {
                
                event(new PurchasereturnDeleted($purchasereturn));

                return true;
            }

            throw new GeneralException(__('exceptions.backend.purchasereturns.delete_error'));
        });
		*/
		Purchasereturn::where('id', $purchasereturn->id)->delete();
		Purchasereturnitem::where('purchasereturn_id', $purchasereturn->id)->delete();
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
        if (isset($input['purchasereturn_image']) && ! empty($input['purchasereturn_image'])) {
            $avatar = $input['purchasereturn_image'];
            $fileName = time().$avatar->getClientOriginalName();

            

            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getRealPath()));

            

            $input = array_merge($input, ['purchasereturn_image' => $fileName]);
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
        $fileName = $model->purchasereturn_image;

        return $this->storage->delete($this->upload_path.$fileName);
    }
}
