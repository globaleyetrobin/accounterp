<?php

// Suppliers Management
Route::group(['namespace' => 'Purchasereturns', 'prefix' => 'purchasereturn'], function () {
	
	Route::resource('purchasereturns', 'PurchasereturnsController', ['except' => ['show']]);
	//For DataTables
    Route::post('purchasereturns/get', 'PurchasereturnsTableController')
        ->name('purchasereturns.get');
		
		
    Route::get('purchasereturns/print/{id}', ['as' => 'purchasereturns.print', 'uses' => 'PurchasereturnsController@print']);

	
	
});
