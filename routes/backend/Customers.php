<?php

// Customers Management
Route::group(['namespace' => 'Customers', 'prefix' => 'customer'], function () {
	
	Route::resource('customers', 'CustomersController', ['except' => ['show']]);
	//For DataTables
    Route::post('customers/get', 'CustomersTableController')
        ->name('customers.get');
		
	
});
