<?php

// Subcategories Management
Route::group(['namespace' => 'Subcategories', 'prefix' => 'subcategory'], function () {
    Route::resource('subcategories', 'SubcategoriesController', ['except' => ['show']]);

    //For DataTables
    Route::post('subcategories/get', 'SubcategoriesTableController')
        ->name('subcategories.get');
});
