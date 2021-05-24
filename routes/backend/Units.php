<?php

// Units Management
Route::group(['namespace' => 'Units', 'prefix' => 'unit'], function () {
    Route::resource('units', 'UnitsController', ['except' => ['show']]);

    //For DataTables
    Route::post('units/get', 'unitsTableController')
        ->name('units.get');
});
