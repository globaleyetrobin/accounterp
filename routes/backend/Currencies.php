<?php

// Currencies Management
Route::group(['namespace' => 'Currencies', 'prefix' => 'currency'], function () {
    Route::resource('currencies', 'CurrenciesController', ['except' => ['show']]);

    //For DataTables
    Route::post('currencies/get', 'currenciesTableController')
        ->name('currencies.get');
});
