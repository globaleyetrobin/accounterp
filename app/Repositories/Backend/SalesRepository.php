<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Sales\SaleCreated;
use App\Events\Backend\Sales\SaleDeleted;
use App\Events\Backend\Sales\SaleUpdated;
use App\Exceptions\GeneralException;
use App\Models\Sale;
use App\Models\Category;

use App\Models\Saleitem;


/*
use App\Events\Backend\Saleitems\SaleitemCreated;
use App\Events\Backend\Saleitems\SaleitemDeleted;
use App\Events\Backend\Saleitems\SaleitemUpdated;

*/


use App\Events\Backend\Saleitems\SaleitemCreated;


use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SalesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Sale::class;

    protected $upload_path;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'sale_no',
        'sale_date',
        'sale_company',
        'sale_branch',
        'sale_customer',
        'sale_image',
        'sale_notes',
        'sale_amount',
        'sale_discounttype',
        'sale_discountamount',
        'sale_discounttotal',
        'sale_taxtype',
        'sale_taxamount',
        'sale_netamount',
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
        $this->upload_path = 'img'.DIRECTORY_SEPARATOR.'sale'.DIRECTORY_SEPARATOR;
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
            ->leftjoin('users', 'users.id', '=', 'sales.created_by')
            ->select([
			'sales.id',
                'sales.sale_no',
        'sales.sale_date',
        'sales.sale_company',
        'sales.sale_branch',
        'sales.sale_customer',
        'sales.sale_image',
        'sales.sale_notes',
        'sales.sale_amount',
        'sales.sale_discounttype',
        'sales.sale_discountamount',
        'sales.sale_discounttotal',
        'sales.sale_taxtype',
        'sales.sale_taxamount',
        'sales.sale_netamount',
         'sales.status',
                
                'sales.created_by',
                'sales.created_at',
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
      
      // robingnanaraj adding the sale items logic
        return DB::transaction(function () use ($input) {

           
            $input['created_by'] = auth()->user()->id;

            $input = $this->uploadImage($input);
			
			
		
			
			
			
			
		
			/*
			$Saleitem = new Saleitem;
			
			
                $Saleitem->sale_id = $sale_items['sale_id'];
                $Saleitem->saleitems_name = $sale_items['saleitems_name'];
				$Saleitem->saleitems_quantity = $sale_items['saleitems_quantity'];
				$Saleitem->saleitems_price = $sale_items['saleitems_price'];
				
				$Saleitem->saleitems_actual_amount = $sale_items['saleitems_actual_amount'];
                $Saleitem->saleitems_discount_rate = $sale_items['saleitems_discount_rate'];
				$Saleitem->saleitems_discount_amount = $sale_items['saleitems_discount_amount'];
				$Saleitem->saleitems_final_amount = $sale_items['saleitems_final_amount'];
				
				
				
				
				
				$ids=$Saleitem->save();
			
			*/
			
			
			
			
			
			
			
            
            if ($sale = Sale::create($input)) {
                
				
				
                event(new SaleCreated($sale));
				
				
			$items_count=count($input['saleitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        $sale_items['sale_id']               =      $sale->id;
				        $sale_items['saleitems_name']               =$input['saleitems_name'][$i];

                        $sale_items['saleitems_cat']               =$input['saleitems_cat'][$i];

                        $sale_items['saleitems_subcat']               =$input['saleitems_subcat'][$i];


				
				        $sale_items['saleitems_quantity']          =$input['saleitems_quantity'][$i];
						$sale_items['saleitems_price']             =$input['saleitems_price'][$i];
						$sale_items['saleitems_actual_amount']     =$input['saleitems_actual_amount'][$i];
						$sale_items['saleitems_discount_rate']     =$input['saleitems_discount_rate'][$i];
						
						$sale_items['saleitems_discount_amount']   =$input['saleitems_discount_amount'][$i];
						
						$sale_items['saleitems_final_amount']      =$input['saleitems_final_amount'][$i];
						
						 if ($saleitems = Saleitem::create($sale_items))
							 {
                
                              event(new SaleitemCreated($saleitems));
               
                            }
			
			}
			
			
			  
               
    
                return $sale;
            }

            throw new GeneralException(__('exceptions.backend.sales.create_error'));
        });
    }

    /**
     * @param \App\Models\Sale $sale
     * @param array $input
     */
    public function update(Sale $sale, array $input)
    {
       
        $input['updated_by'] = auth()->user()->id;
        

        // Uploading Image
        if (array_key_exists('sale_image', $input)) {
            $this->deleteOldFile($sale);
            $input = $this->uploadImage($input);
        }

        return DB::transaction(function () use ($sale, $input) {
            if ($sale->update($input)) {
                // Updateing associated category's id in mapper table
            
                Saleitem::where('sale_id', $sale->id)->forceDelete();
				
				
             
                event(new SaleUpdated($sale));
				
				$items_count=count($input['saleitems_name']);	
				for($i=0;$i<$items_count;$i++)
			{
				
				        if($input['saleitems_name'][$i] !='')
                        {							
				        $sale_items['sale_id']               =      $sale->id;
				        $sale_items['saleitems_name']               =$input['saleitems_name'][$i];

                        $sale_items['saleitems_cat']               =$input['saleitems_cat'][$i];

                        $sale_items['saleitems_subcat']               =$input['saleitems_subcat'][$i];


				
				        $sale_items['saleitems_quantity']          =$input['saleitems_quantity'][$i];
						$sale_items['saleitems_price']             =$input['saleitems_price'][$i];
						$sale_items['saleitems_actual_amount']     =$input['saleitems_actual_amount'][$i];
						$sale_items['saleitems_discount_rate']     =$input['saleitems_discount_rate'][$i];
						
						$sale_items['saleitems_discount_amount']   =$input['saleitems_discount_amount'][$i];
						
						$sale_items['saleitems_final_amount']      =$input['saleitems_final_amount'][$i];
						
						 if ($saleitems = Saleitem::create($sale_items))
							 {
                
                              event(new SaleitemCreated($saleitems));
               
                            }
						}
						
			
			}
			
			

                return $sale->fresh();
            }

            throw new GeneralException(__('exceptions.backend.sales.update_error'));
        });
    }

 
    
    /**
     * @param \App\Models\Sales\Sale $sale
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Sale $sale)
    {
       /* DB::transaction(function () use ($sale) {
            if ($sale->delete()) {
                
                event(new SaleDeleted($sale));

                return true;
            }

            throw new GeneralException(__('exceptions.backend.sales.delete_error'));
        });
		*/
		Sale::where('id', $sale->id)->delete();
		Saleitem::where('sale_id', $sale->id)->delete();
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
        if (isset($input['sale_image']) && ! empty($input['sale_image'])) {
            $avatar = $input['sale_image'];
            $fileName = time().$avatar->getClientOriginalName();

            

            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getRealPath()));

            

            $input = array_merge($input, ['sale_image' => $fileName]);
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
        $fileName = $model->sale_image;

        return $this->storage->delete($this->upload_path.$fileName);
    }
}
