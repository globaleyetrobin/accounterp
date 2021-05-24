<?php

// Allowances Management
Route::group(['namespace' => 'Allowances', 'prefix' => 'allowance'], function () {
    Route::resource('allowances', 'AllowancesController', ['except' => ['show']]);

    //For DataTables
    Route::post('allowances/get', 'allowancesTableController')
        ->name('allowances.get');
});
