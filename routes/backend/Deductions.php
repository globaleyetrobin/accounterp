<?php

// Deductions Management
Route::group(['namespace' => 'Deductions', 'prefix' => 'deduction'], function () {
    Route::resource('deductions', 'DeductionsController', ['except' => ['show']]);

    //For DataTables
    Route::post('deductions/get', 'DeductionsTableController')
        ->name('deductions.get');
});
