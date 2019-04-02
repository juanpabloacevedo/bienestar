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

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/**alias de la ruta, controlador a usar@funcion dentro del controlador */
Route::get('/login', 'UserController@login');
Route::post('/login', 'UserController@login');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/user', 'HomeController@user')->name('user');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
