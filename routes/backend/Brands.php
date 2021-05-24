<?php

// Brands Management
Route::group(['namespace' => 'Brands', 'prefix' => 'brand'], function () {
    Route::resource('brands', 'BrandsController', ['except' => ['show']]);

    //For DataTables
    Route::post('brands/get', 'BrandsTableController')
        ->name('brands.get');
});
