<?php

// Suppliers Management
Route::group(['namespace' => 'Suppliers', 'prefix' => 'supplier'], function () {
	
	Route::resource('suppliers', 'SuppliersController', ['except' => ['show']]);
	//For DataTables
    Route::post('suppliers/get', 'SuppliersTableController')
        ->name('suppliers.get');
		
	
});
