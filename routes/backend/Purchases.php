<?php


// Suppliers Management
Route::group(['namespace' => 'Purchases', 'prefix' => 'purchase'], function () {
	
	Route::resource('purchases', 'PurchasesController', ['except' => ['show']]);
	//For DataTables
    Route::post('purchases/get', 'PurchasesTableController')
        ->name('purchases.get');
		
		
     Route::get('purchases/purchasesprint/{id}', ['as' => 'purchases.purchasesprint', 'uses' => 'PurchasesController@purchasesprint']);
	 
	Route::get('purchases/subcategory', ['as' => 'purchases.subcategory', 'uses' => 'PurchasesController@subcategory']);
	
	
	Route::get('purchases/productlist', ['as' => 'purchases.productlist', 'uses' => 'PurchasesController@productlist']);
	
	
	
		
	
});
