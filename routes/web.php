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
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/counties', 'CountyController@index');
Route::get('/municipalities', 'MunicipalityController@index');
Route::get('/cities', 'CityController@index');
Route::get('/drivers', 'DriverController@index');
Route::get('/driverlicences', 'DriverLicenceController@index');
Route::get('/categories', 'CategoryController@index');
Route::get('/categorydriverlicence', 'CategoryDriverLicenceController@index');
Route::get('/counties/new', 'CountyController@create');
Route::post('/counties', 'CountyController@store');
Route::get('/municipalities/new', 'MunicipalityController@create');
Route::post('/municipalities', 'MunicipalityController@store');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');
Route::get('/drivers/new', 'DriverController@create');
Route::post('/drivers', 'DriverController@store');
Route::get('/driverlicences/new', 'DriverLicenceController@create');
Route::post('/driverlicences', 'DriverLicenceController@store');
Route::get('/categories/new', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categorydriverlicence/new', 'CategoryDriverLicenceController@create');
Route::post('/categorydriverlicence', 'CategoryDriverLicenceController@store');
Route::get('/cities/delete/{id}', 'CityController@destroy');
Route::get('/counties/delete/{id}', 'CountyController@destroy');
Route::get('/municipalities/delete/{id}', 'MunicipalityController@destroy');
Route::get('/drivers/delete/{id}', 'DriverController@destroy');
Route::get('/driverlicences/delete/{id}', 'DriverLicenceController@destroy');
Route::get('/categories/delete/{id}', 'CategoryController@destroy');
Route::get('/categorydriverlicence/delete/{id}', 'CategoryDriverLicenceController@destroy');