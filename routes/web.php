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

//Route::get('/', function () {
//    return view('layouts/master');
//});



Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index');

Route::get('/student', 'StudentControllers@index');
Route::get('/student/create', 'StudentControllers@create');
Route::post('/student', 'StudentControllers@store');
Route::get('/student/edit/{id}', 'StudentControllers@edit');
Route::put('/student', 'StudentControllers@update');
Route::get('/student/delete/{id}', 'StudentControllers@destroy');
Route::get('/student/show/{id}', 'StudentControllers@show');

Route::get('/majority', 'MajorityControllers@index');
Route::get('/majority/create', 'MajorityControllers@create');
Route::post('/majority', 'MajorityControllers@store');
Route::get('/majority/edit/{id}', 'MajorityControllers@edit');
Route::put('/majority', 'MajorityControllers@update');
Route::get('/majority/delete/{id}', 'MajorityControllers@destroy');
Route::get('/majority/show/{id}', 'MajorityControllers@show');

Route::get('/faculty', 'FacultyControllers@index');
Route::get('/faculty/create', 'FacultyControllers@create');
Route::post('/faculty', 'FacultyControllers@store');
Route::get('/faculty/edit/{id}', 'FacultyControllers@edit');
Route::put('/faculty', 'FacultyControllers@update');
Route::get('/faculty/delete/{id}', 'FacultyControllers@destroy');
Route::get('/faculty/show/{id}', 'FacultyControllers@show');

Route::get('/club', 'ClubControllers@index');
Route::get('/club/create', 'ClubControllers@create');
Route::post('/club', 'ClubControllers@store');
Route::get('/club/edit/{id}', 'ClubControllers@edit');
Route::put('/club', 'ClubControllers@update');
Route::get('/club/delete/{id}', 'ClubControllers@destroy');
Route::get('/club/show/{id}', 'ClubControllers@show');


Route::get('/card', 'CardControllers@index');
Route::get('/card/create', 'CardControllers@create');
Route::post('/card', 'CardControllers@store');
Route::get('/card/edit/{id}', 'CardControllers@edit');
Route::put('/card', 'CardControllers@update');
Route::get('/card/delete/{id}', 'CardControllers@destroy');
Route::get('/card/show/{id}', 'CardControllers@show');

Route::get('/credit', 'CreditControllers@index');
Route::get('/credit/create', 'CreditControllers@create');
Route::post('/credit', 'CreditControllers@store');
Route::get('/credit/edit/{id}', 'CreditControllers@edit');
Route::put('/credit', 'CreditControllers@update');
Route::get('/credit/delete/{id}', 'CreditControllers@destroy');
Route::get('/credit/show/{id}', 'CreditControllers@show');

Auth::routes();
