<?php

// Accountcategories Management
Route::group(['namespace' => 'Accountcategories', 'prefix' => 'accountcategory'], function () {
    Route::resource('accountcategories', 'AccountcategoriesController', ['except' => ['show']]);

    //For DataTables
    Route::post('accountcategories/get', 'AccountcategoriesTableController')
        ->name('accountcategories.get');
});
