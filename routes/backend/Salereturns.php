<?php

// Suppliers Management
Route::group(['namespace' => 'Salereturns', 'prefix' => 'salereturn'], function () {
	
	Route::resource('salereturns', 'SalereturnsController', ['except' => ['show']]);
	//For DataTables
    Route::post('salereturns/get', 'SalereturnsTableController')
        ->name('salereturns.get');
		
	
});
