<?php

// Suppliers Management
Route::group(['namespace' => 'Sales', 'prefix' => 'sale'], function () {
	
	Route::resource('sales', 'SalesController', ['except' => ['show']]);
	//For DataTables
    Route::post('sales/get', 'SalesTableController')
        ->name('sales.get');


     Route::get('sales/salesretrun/{id}', ['as' => 'sales.salesretrun', 'uses' => 'SalesController@salesretrun']);
	 
	 
	 Route::get('sales/salesprint/{id}', ['as' => 'sales.salesprint', 'uses' => 'SalesController@salesprint']);
   
		
	
});
