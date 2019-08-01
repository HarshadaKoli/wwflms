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

Route::get('/', function () {
    return view('theme');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createclient', 'ClientController@index');
Route::get('/editclient/{id}', 'ClientController@edit');
Route::get('/clientall', 'ClientController@all');
Route::post('/registerclient', 'ClientController@create');
Route::post('/updateclient', 'ClientController@update');
Route::get('/deleteclient/{id}', 'ClientController@destroy');
Route::get('/viewclient/{id}', 'ClientController@show');


Route::get('/createemp', 'EmpController@index');
Route::get('/editemp/{id}', 'EmpController@edit');
Route::get('/empall', 'EmpController@all');
Route::post('/registeremp', 'EmpController@create');
Route::post('/updateemp', 'EmpController@update');
Route::get('/deleteemp/{id}', 'EmpController@destroy');
Route::get('/viewemp/{id}', 'EmpController@show');


Route::get('/createbank', 'BankController@index');
Route::get('/editbank/{id}', 'BankController@edit');
Route::get('/bankall', 'BankController@all');
Route::post('/registerbank', 'BankController@create');
Route::post('/updatebank', 'BankController@update');
Route::get('/deletebank/{id}', 'BankController@destroy');


Route::get('/createaction', 'ActionController@index');
Route::get('/editaction/{id}', 'ActionController@edit');
Route::get('/actionall', 'ActionController@all');
Route::post('/registeraction', 'ActionController@create');
Route::post('/updateaction', 'ActionController@update');
Route::get('/deleteaction/{id}', 'ActionController@destroy');

Route::get('/createindustry', 'IndustryController@index');
Route::get('/editindustry/{id}', 'IndustryController@edit');
Route::get('/industryall', 'IndustryController@all');
Route::post('/registerindustry', 'IndustryController@create');
Route::post('/updateindustry', 'IndustryController@update');
Route::get('/deleteindustry/{id}', 'IndustryController@destroy');


Route::get('/createpurpose', 'PurposeController@index');
Route::get('/editpurpose/{id}', 'PurposeController@edit');
Route::get('/purposeall', 'PurposeController@all');
Route::post('/registerpurpose', 'PurposeController@create');
Route::post('/updatepurpose', 'PurposeController@update');
Route::get('/deletepurpose/{id}', 'PurposeController@destroy');

Route::get('/createstatus', 'StatusController@index');
Route::get('/editstatus/{id}', 'StatusController@edit');
Route::get('/statusall', 'StatusController@all');
Route::post('/registerstatus', 'StatusController@create');
Route::post('/updatestatus', 'StatusController@update');
Route::get('/deletestatus/{id}', 'StatusController@destroy');