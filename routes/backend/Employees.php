<?php

// Employees Management
Route::group(['namespace' => 'Employees', 'prefix' => 'employee'], function () {
	
	Route::resource('employees', 'EmployeesController', ['except' => ['show']]);
	//For DataTables
    Route::post('employees/get', 'EmployeesTableController')
        ->name('employees.get');
		
     Route::get('employees/salary/{id}', ['as' => 'employees.salary', 'uses' => 'EmployeesController@salary']);	

      Route::get('employees/document/{id}', ['as' => 'employees.document', 'uses' => 'EmployeesController@document']);


    Route::post('employees/savesalary', ['as' => 'employees.savesalary', 'uses' => 'EmployeesController@savesalary']);		  
		
	
});
