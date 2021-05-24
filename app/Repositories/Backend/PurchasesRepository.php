<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Purchases\PurchaseCreated;
use App\Events\Backend\Purchases\PurchaseDeleted;
use App\Events\Backend\Purchases\PurchaseUpdated;



use App\Events\Backend\Purchaseitems\PurchaseitemCreated;


use App\Events\Backend\Purchaseitems\PurchaseitemDeleted;


use App\Events\Backend\Purchaseitems\PurchaseitemUpdated;





use App\Exceptions\GeneralException;
use App\Models\Purchase;
use App\Models\Category;

use App\Models\Purchaseitem;


/*
use App\Events\Backend\Purchaseitems\PurchaseitemCreated;
use App\Events\Backend\Purchaseitems\PurchaseitemDeleted;
use App\Events\Backend\Purchaseitems\PurchaseitemUpdated;

*/





use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PurchasesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Purchase::class;

    protected $upload_path;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'purchase_no',
        'purchase_date',
        'purchase_company',
        'purchase_branch',
        'purchase_supplier',
        'purchase_image',
        'purchase_notes',
        'purchase_amount',
        'purchase_discounttype',
        'purchase_discountamount',
        'purchase_discounttotal',
        'purchase_taxtype',
        'purchase_taxamount',
        'purchase_netamount',
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
        $this->upload_path = 'img'.DIRECTORY_SEPARATOR.'purchase'.DIRECTORY_SEPARATOR;
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
            ->leftjoin('users', 'users.id', '=', 'purchases.created_by')
            ->select([
			'purchases.id',
                'purchases.purchase_no',
        'purchases.purchase_date',
        'purchases.purchase_company',
        'purchases.purchase_branch',
        'purchases.purchase_supplier',
        'purchases.purchase_image',
        'purchases.purchase_notes',
        'purchases.purchase_amount',
        'purchases.purchase_discounttype',
        'purchases.purchase_discountamount',
        'purchases.purchase_discounttotal',
        'purchases.purchase_taxtype',
        'purchases.purchase_taxamount',
        'purchases.purchase_netamount',
         'purchases.status',
                
                'purchases.created_by',
                'purchases.created_at',
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
      
      // robingnanaraj adding the purchase items logic
        return DB::transaction(function () use ($input) {

           
            $input['created_by'] = auth()->user()->id;

            $input = $this->uploadImage($input);
			
			
		
			
			
			
			
		
			/*
			$Purchaseitem = new Purchaseitem;
			
			
                $Purchaseitem->purchase_id = $purchase_items['purchase_id'];
                $Purchaseitem->purchaseitems_name = $purchase_items['purchaseitems_name'];
				$Purchaseitem->purchaseitems_quantity = $purchase_items['purchaseitems_quantity'];
				$Purchaseitem->purchaseitems_price = $purchase_items['purchaseitems_price'];
				
				$Purchaseitem->purchaseitems_actual_amount = $purchase_items['purchaseitems_actual_amount'];
                $Purchaseitem->purchaseitems_discount_rate = $purchase_items['purchaseitems_discount_rate'];
				$Purchaseitem->purchaseitems_discount_amount = $purchase_items['purchaseitems_discount_amount'];
				$Purchaseitem->purchaseitems_final_amount = $purchase_items['purchaseitems_final_amount'];
				
				
				
				
				
				$ids=$Purchaseitem->save();
			
			*/
			
			
			
			
			
			
			
            
            if ($purchase = Purchase::create($input)) {
                
				
				
                event(new PurchaseCreated($purchase));
				
				
			$items_count=count($input['purchaseitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        $purchase_items['purchase_id']               =      $purchase->id;
				        $purchase_items['purchaseitems_name']               =$input['purchaseitems_name'][$i];

                        $purchase_items['purchaseitems_cat']               =$input['purchaseitems_cat'][$i];

                        $purchase_items['purchaseitems_subcat']               =$input['purchaseitems_subcat'][$i];

				
				        $purchase_items['purchaseitems_quantity']          =$input['purchaseitems_quantity'][$i];
						$purchase_items['purchaseitems_price']             =$input['purchaseitems_price'][$i];
						$purchase_items['purchaseitems_actual_amount']     =$input['purchaseitems_actual_amount'][$i];
						$purchase_items['purchaseitems_discount_rate']     =$input['purchaseitems_discount_rate'][$i];
						
						$purchase_items['purchaseitems_discount_amount']   =$input['purchaseitems_discount_amount'][$i];
						
						$purchase_items['purchaseitems_final_amount']      =$input['purchaseitems_final_amount'][$i];
						
						 if ($purchaseitems = Purchaseitem::create($purchase_items))
							 {
                
                              event(new PurchaseitemCreated($purchaseitems));
               
                            }
			
			}
			
			
			  
               
    
                return $purchase;
            }

            throw new GeneralException(__('exceptions.backend.purchases.create_error'));
        });
    }

    /**
     * @param \App\Models\Purchase $purchase
     * @param array $input
     */
    public function update(Purchase $purchase, array $input)
    {
       
        $input['updated_by'] = auth()->user()->id;
        

        // Uploading Image
        if (array_key_exists('purchase_image', $input)) {
            $this->deleteOldFile($purchase);
            $input = $this->uploadImage($input);
        }

        return DB::transaction(function () use ($purchase, $input) {
            if ($purchase->update($input)) {
                // Updateing associated category's id in mapper table
            
                Purchaseitem::where('purchase_id', $purchase->id)->forceDelete();

             
                event(new PurchaseUpdated($purchase));
				
				$items_count=count($input['purchaseitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        if($input['purchaseitems_name'][$i] !='')
                        {							
				        $purchase_items['purchase_id']               =      $purchase->id;
				        $purchase_items['purchaseitems_name']               =$input['purchaseitems_name'][$i];

                        $purchase_items['purchaseitems_cat']               =$input['purchaseitems_cat'][$i];

                        $purchase_items['purchaseitems_subcat']               =$input['purchaseitems_subcat'][$i];

				
				        $purchase_items['purchaseitems_quantity']          =$input['purchaseitems_quantity'][$i];
						$purchase_items['purchaseitems_price']             =$input['purchaseitems_price'][$i];
						$purchase_items['purchaseitems_actual_amount']     =$input['purchaseitems_actual_amount'][$i];
						$purchase_items['purchaseitems_discount_rate']     =$input['purchaseitems_discount_rate'][$i];
						
						$purchase_items['purchaseitems_discount_amount']   =$input['purchaseitems_discount_amount'][$i];
						
						$purchase_items['purchaseitems_final_amount']      =$input['purchaseitems_final_amount'][$i];


                       
						 if ($purchaseitems = Purchaseitem::create($purchase_items))
							 {
                
                              event(new PurchaseitemCreated($purchaseitems));
               
                            }
						}
						
			
			}
			
			

                return $purchase->fresh();
            }

            throw new GeneralException(__('exceptions.backend.purchases.update_error'));
        });
    }

 
    
    /**
     * @param \App\Models\Purchases\Purchase $purchase
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Purchase $purchase)
    {
       /* DB::transaction(function () use ($purchase) {
            if ($purchase->delete()) {
                
                event(new PurchaseDeleted($purchase));

                return true;
            }

            throw new GeneralException(__('exceptions.backend.purchases.delete_error'));
        });
		*/
		Purchase::where('id', $purchase->id)->delete();
		Purchaseitem::where('purchase_id', $purchase->id)->delete();
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
        if (isset($input['purchase_image']) && ! empty($input['purchase_image'])) {
            $avatar = $input['purchase_image'];
            $fileName = time().$avatar->getClientOriginalName();

            

            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getRealPath()));

            

            $input = array_merge($input, ['purchase_image' => $fileName]);
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
        $fileName = $model->purchase_image;

        return $this->storage->delete($this->upload_path.$fileName);
    }
}
