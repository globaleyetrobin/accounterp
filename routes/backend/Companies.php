<?php

// Companies Management
Route::group(['namespace' => 'Companies', 'prefix' => 'company'], function () {
	
	Route::resource('companies', 'CompaniesController', ['except' => ['show']]);
	//For DataTables
    Route::post('companies/get', 'CompaniesTableController')
        ->name('companies.get');
		
	
});
