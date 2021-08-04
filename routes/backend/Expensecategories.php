<?php

// Expensecategories Management
Route::group(['namespace' => 'Expensecategories', 'prefix' => 'expensecategory'], function () {
    Route::resource('expensecategories', 'ExpensecategoriesController', ['except' => ['show']]);

    //For DataTables
    Route::post('expensecategories/get', 'ExpensecategoriesTableController')
        ->name('expensecategories.get');
});
