<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'HomeController@index');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/hi', 'HomeController@hi')->name('hi');


Route::get('/employee', 'EmployeeController@index')->name('employee.home');

Route::get('/employee/add', 'EmployeeController@create')->name('employee.add');

Route::post('/employee/store', 'EmployeeController@store')->name('employee.store');

Route::get('/employee/edit/{id}', 'EmployeeController@edit');

Route::put('/employee/update', 'EmployeeController@update')->name('employee.update');

Route::get('/employee/delete/{id}', 'EmployeeController@destroy');

Route::get('/employee/show/{id}', 'EmployeeController@show');



Route::get('/department', 'DepartmentController@index')->name('department.home');

Route::get('/department/add', 'DepartmentController@create')->name('department.add');

Route::post('/department/store', 'DepartmentController@store')->name('department.store');

Route::get('/department/edit/{id}', 'DepartmentController@edit');

Route::put('/department/update', 'DepartmentController@update')->name('department.update');

Route::get('/department/delete/{id}', 'DepartmentController@destroy');



Route::get('/position', 'PositionController@index')->name('position.home');

Route::get('/position/add', 'PositionController@create')->name('position.add');

Route::post('/position/store', 'PositionController@store')->name('position.store');

Route::get('/position/edit/{id}', 'PositionController@edit');

Route::put('/position/update', 'PositionController@update')->name('position.update');

Route::get('/position/delete/{id}', 'PositionController@destroy');


Route::get('/inventory', 'InventoryController@index')->name('inventory.home');

Route::get('/inventory/add', 'InventoryController@create')->name('inventory.add');

Route::post('/inventory/store', 'InventoryController@store')->name('inventory.store');

Route::get('/inventory/edit/{id}', 'InventoryController@edit');

Route::put('/inventory/update', 'InventoryController@update')->name('inventory.update');

Route::get('/inventory/delete/{id}', 'InventoryController@destroy');


Route::get('/archive', 'ArchiveController@index')->name('archive.home');

Route::get('/archive/add', 'ArchiveController@create')->name('archive.add');

Route::post('/archive/store', 'ArchiveController@store')->name('archive.store');

Route::get('/archive/edit/{id}', 'ArchiveController@edit');

Route::put('/archive/update', 'ArchiveController@update')->name('archive.update');

Route::get('/archive/delete/{id}', 'ArchiveController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/member', 'MemberController@index')->name('member.home');

Route::get('/member/add', 'MemberController@create')->name('member.add');

Route::post('/member/store', 'MemberController@store')->name('member.store');

Route::get('/member/edit/{id}', 'MemberController@edit');

Route::put('/member/update', 'MemberController@update')->name('member.update');

Route::get('/member/delete/{id}', 'MemberController@destroy');


//API
Route::get('/api/department', 'DepartmentApiController@index');