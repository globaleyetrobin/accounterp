<?php

// Categories Management
Route::group(['namespace' => 'Journels', 'prefix' => 'journel'], function () {
    Route::resource('journels', 'JournelsController', ['except' => ['show']]);

    //For DataTables
    Route::post('journels/get', 'JournelsTableController')
        ->name('journels.get');

  
            
});


Route::get('/ledger', 'Journels\JournelsController@getLedger');