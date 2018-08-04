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

Auth::routes();

//Route::group(['middleware' => ['admin', 'manager']], function() {
//    Route::get('/menu', 'MenuController@index');
//});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/test', 'HomeController@test');

Route::get('email', 'HomeController@email');
Route::post('email', 'HomeController@sendemail')->name('sendemail');
Route::get('getdata', 'HomeController@data');

Route::get('/example', 'DesignController@example');
Route::get('ui/index', 'DesignController@index');
Route::get('/testhtml', 'HomeController@testindex');
