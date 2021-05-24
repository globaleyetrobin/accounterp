<?php

// Branches Management
Route::group(['namespace' => 'Branches', 'prefix' => 'branch'], function () {
	
	Route::resource('branches', 'BranchesController', ['except' => ['show']]);
	//For DataTables
    Route::post('branches/get', 'BranchesTableController')
        ->name('branches.get');
		
	
});
