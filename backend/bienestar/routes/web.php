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
/**alias de la ruta, controlador a usar@funcion dentro del controlador */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'UserController@login');
Route::get('/register', 'UserController@create_register');
Route::post('/register', 'UserController@register')->name('register');
Route::get('/registeradmin', 'UserController@create_registeradmin');
Route::post('/registeradmin', 'UserController@registeradmin')->name('registeradmin');
/***espacios deportivos */
Route::get('/registerespdep', 'EspaciosDeportivoController@create_register');
Route::post('/registerespdep', 'EspaciosDeportivoController@register')->name('registerespdep');
Route::get('/indexespaciosdeportivos', 'EspaciosDeportivoController@listaespaciosdeportivos');
/**clases */
Route::get('/registerclase', 'ClaseController@create_register');
Route::post('/registerclase', 'ClaseController@register')->name('registerclase');
Route::get('/indexclases', 'ClaseController@index')->name('indexclases');
Route::post('/claseactual', 'ClaseController@claseActual')->name('claseactual');
Route::get('/modalclase', 'ClaseController@modalusers')->name('modalclase');



/**sedes*/
Route::get('/indexsedes', 'SedeController@index')->name('indexsedes');
Route::get('/registersede', 'SedeController@create_register')->name('registersede');
Route::post('/registersede', 'SedeController@create');
/**iniciales */
Route::post('/login', 'UserController@login');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/user', 'HomeController@user')->name('user');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/indexuser', 'UserController@listausuarios');
/**rutas de administrador */
Route::get('/clases', 'ClaseController@index');
Route::Post('/espacios', 'UserController@listarEspDep');
Route::get('/listaclases', 'UserController@listaclases');

/****************************** */
/**Ajax */
Route::post('/subscribe_user', 'ClaseController@subscribeUser');





