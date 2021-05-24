<?php

// Suppliers Management
Route::group(['namespace' => 'Products', 'prefix' => 'product'], function () {
	
	Route::resource('products', 'ProductsController', ['except' => ['show']]);
	//For DataTables
    Route::post('products/get', 'ProductsTableController')
        ->name('products.get');
	
   // product stocks 
   
     Route::post('products/currentstock', 'ProductstocksTableController')
        ->name('products.currentstock');
		
		
   
   /* Route::post('products/currentstock', 'ProductsTableController')
        ->name('products.currentstock');
		*/
		
		
	 //Route::get('products/currentstock', ['as' => 'products.currentstock', 'uses' => 'ProductsController@currentstock']);
		 
		 

       Route::get('products/stock', ['as' => 'products.stock', 'uses' => 'ProductsController@stock']);
   
	
});
