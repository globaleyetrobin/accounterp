<?php

// Loans Management
Route::group(['namespace' => 'Loans', 'prefix' => 'loan'], function () {
    Route::resource('loans', 'LoansController', ['except' => ['show']]);

    //For DataTables
    Route::post('loans/get', 'LoansTableController')
        ->name('loans.get');
		
		
    Route::get('loans/emi/{id}', ['as' => 'loans.emi', 'uses' => 'LoansController@emi']);		

    Route::get('loans/emilist/{id}', ['as' => 'loans.emilist', 'uses' => 'LoansController@emilist']);	
	
	Route::post('loans/emistore', ['as' => 'loans.emistore', 'uses' => 'LoansController@emistore']);
});
