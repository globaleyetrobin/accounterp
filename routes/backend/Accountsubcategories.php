<?php

// Accountsubcategories Management
Route::group(['namespace' => 'Accountsubcategories', 'prefix' => 'accountsubcategory'], function () {
    Route::resource('accountsubcategories', 'AccountsubcategoriesController', ['except' => ['show']]);

    //For DataTables
    Route::post('accountsubcategories/get', 'AccountsubcategoriesTableController')
        ->name('accountsubcategories.get');
});
