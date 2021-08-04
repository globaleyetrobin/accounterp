<?php

// Categories Management
Route::group(['namespace' => 'Expenses', 'prefix' => 'expense'], function () {
    Route::resource('expenses', 'ExpensesController', ['except' => ['show']]);

    //For DataTables
    Route::post('expenses/get', 'ExpensesTableController')
        ->name('expenses.get');
		
		  Route::get('ledger', ['as' => 'ledger', 'uses' => 'ExpensesTableController@ledger']);
		  
});

/*
Route::group(['namespace' => 'Expenses', 'prefix' => 'ledger'], function () {
    Route::get('ledger', ['as' => 'ledger', 'uses' => 'ExpensesTableController@ledger']);

  
});
*/