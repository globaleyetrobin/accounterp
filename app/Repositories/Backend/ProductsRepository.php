<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Products\ProductCreated;
use App\Events\Backend\Products\ProductDeleted;
use App\Events\Backend\Products\ProductUpdated;
use App\Exceptions\GeneralException;
use App\Models\Product;
use App\Models\Category;


use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Product::class;

    protected $upload_path;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'product_name',
		'product_code',
		'product_barcode',
		'product_cat',
		'product_subcat',
		'product_brand',
		'product_unit',
		'product_image',
		'product_alertqty',
		'product_tax',
		'product_discounttype',
		'product_discount',
		'product_amount',
		'product_taxamount',
		'product_margintype',
		'product_marginamount',
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
        $this->upload_path = 'img'.DIRECTORY_SEPARATOR.'product'.DIRECTORY_SEPARATOR;
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
            ->leftjoin('users', 'users.id', '=', 'products.created_by')
            ->select([
                'products.id',
                'products.product_name',
				'products.product_code',
				'products.product_barcode',
				'products.product_cat',
				'products.product_subcat',
				'products.product_brand',
				'products.product_unit',
				'products.product_image',
				'products.product_alertqty',
				'products.product_tax',
				'products.product_discounttype',
				'products.product_discount',
				'products.product_amount',
				'products.product_taxamount',
				'products.product_margintype',
				'products.product_marginamount',
                'products.status',
                'products.created_by',
                'products.created_at',
                'users.first_name as user_name',
            ]);
    }
	
	
	public function getForDataTables()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'products.created_by')
            ->select([
                'products.id',
                'products.product_name',
				'products.product_code',
				DB::raw('(select SUM(p.purchaseitems_quantity) as purchase from purchaseitems as p where p.purchaseitems_name= products.id )  as totalpurchase'),
				
				DB::raw('(select SUM(s.saleitems_quantity) as sales from saleitems as s where s.saleitems_name= products.id )  as totalsales'),
				
				DB::raw('(select SUM(sr.salereturnitems_quantity) as good from salereturnitems as sr where sr.salereturnitems_type="good" and  sr.salereturnitems_name= products.id )  as goodproduct'),
				
				DB::raw('(select SUM(sr.salereturnitems_quantity) as demage from salereturnitems as sr where sr.salereturnitems_type="demage" and  sr.salereturnitems_name= products.id )  as demageproduct'),
				
				//DB::raw('(totalpurchase-totalsales) as product_code'),
			
                'products.status'
               
            ])
			->groupBy('products.id');
			
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
      

        return DB::transaction(function () use ($input) {

           
            $input['created_by'] = auth()->user()->id;

            $input = $this->uploadImage($input);

            
            if ($product = Product::create($input)) {
                
                event(new ProductCreated($product));
               
    
                return $product;
            }

            throw new GeneralException(__('exceptions.backend.products.create_error'));
        });
    }

    /**
     * @param \App\Models\Product $product
     * @param array $input
     */
    public function update(Product $product, array $input)
    {
       
        $input['updated_by'] = auth()->user()->id;
        

        // Uploading Image
        if (array_key_exists('product_image', $input)) {
            $this->deleteOldFile($product);
            $input = $this->uploadImage($input);
        }

        return DB::transaction(function () use ($product, $input) {
            if ($product->update($input)) {
                // Updateing associated category's id in mapper table
              

             
                event(new ProductUpdated($product));

                return $product->fresh();
            }

            throw new GeneralException(__('exceptions.backend.products.update_error'));
        });
    }

    /**
     * Creating Tags.
     *
     * @param array $tags
     *
     * @return array
     */
    public function createTags($tags)
    {
        //Creating a new array for tags (newly created)
        $tags_array = [];

        foreach ($tags as $tag) {
            if (is_numeric($tag)) {
                $tags_array[] = $tag;
            } else {
                $newTag = ProductTag::firstOrCreate(
                    [
                        'name' => $tag,
                    ],
                    [
                        'name' => $tag,
                        'status' => 1,
                        'created_by' => auth()->user()->id,
                    ]
                );
                $tags_array[] = $newTag->id;
            }
        }

        return $tags_array;
    }

    /**
     * Creating Categories.
     *
     * @param array $categories
     *
     * @return array
     */
    public function createCategories($categories)
    {
        //Creating a new array for categories (newly created)
        $categories_array = [];

        foreach ($categories as $category) {
            if (is_numeric($category)) {
                $categories_array[] = $category;
            } else {
                $newCategory = ProductCategory::firstOrCreate(
                    [
                        'name' => $category,
                    ],
                    [
                        'name' => $category,
                        'status' => 1,
                        'created_by' => auth()->user()->id,
                    ]
                );

                $categories_array[] = $newCategory->id;
            }
        }

        return $categories_array;
    }

    /**
     * @param \App\Models\Products\Product $product
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Product $product)
    {
        DB::transaction(function () use ($product) {
            if ($product->delete()) {
                
                event(new ProductDeleted($product));

                return true;
            }

            throw new GeneralException(__('exceptions.backend.products.delete_error'));
        });
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
        if (isset($input['product_image']) && ! empty($input['product_image'])) {
            $avatar = $input['product_image'];
            $fileName = time().$avatar->getClientOriginalName();

            

            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getRealPath()));

            

            $input = array_merge($input, ['product_image' => $fileName]);
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
        $fileName = $model->product_image;

        return $this->storage->delete($this->upload_path.$fileName);
    }
}
