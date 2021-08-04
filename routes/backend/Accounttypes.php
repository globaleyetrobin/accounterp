<?php

// Categories Management
Route::group(['namespace' => 'Accounttypes', 'prefix' => 'accounttype'], function () {
    Route::resource('accounttypes', 'AccounttypesController', ['except' => ['show']]);

    //For DataTables
    Route::post('accounttypes/get', 'AccounttypesTableController')
        ->name('accounttypes.get');
});
