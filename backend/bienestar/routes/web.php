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
Route::get('login', 'UserController@create_login')->name('login');
Route::post('/login', 'UserController@login');

/**permisos de administrador
*/
Route::group(['middleware'=>['auth','admin']],function(){	
	Route::get('/admin', 'HomeController@admin')->name('admin');
	Route::get('/user', 'HomeController@user')->name('user');
	
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/indexuser', 'UserController@index')->name('indexuser');
	/**alias de la ruta, controlador a usar@funcion dentro del controlador */
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/register', 'UserController@create_register');
	Route::post('/register', 'UserController@register')->name('register');
	Route::get('/registeradmin', 'UserController@create_registeradmin');
	Route::post('/registeradmin', 'UserController@registeradmin')->name('registeradmin');
	/***espacios deportivos 'tipo de clase o deporte'*/
	Route::get('/registerespdep', 'EspaciosDeportivoController@create_register');
	Route::post('/registerespdep', 'EspaciosDeportivoController@register')->name('registerespdep');
	Route::get('/indexespaciosdeportivo', 'EspaciosDeportivoController@index')->name('indexespaciosdeportivo');
	
	/**clases */
	Route::get('/registerclase', 'ClaseController@create_register');
	Route::post('/registerclase', 'ClaseController@store')->name('registerclase');
	Route::get('/indexclases', 'ClaseController@index')->name('indexclases');
	Route::post('/claseactual', 'ClaseController@claseActual')->name('claseactual');
	Route::get('/modalclase', 'ClaseController@modalusers')->name('modalclase');
	/**clase por usuario*/
	Route::post('/listarclases', 'ClaseController@listarclases')->name('listarclases');



	/**espacio 'aula, gimnacio, cancha etc' */
	Route::get('/registerespacio', 'EspacioController@create_register');
	Route::post('/registerespacio', 'EspacioController@create')->name('registerespacio');
	Route::get('/indexespacio', 'EspacioController@index')->name('indexespacio');
	/**reservas */
	Route::post('/registerreserva', 'ReservaController@store')->name('registerreserva');
	Route::get('/registerreserva', 'ReservaController@create');
	Route::get('/indexreserva', 'ReservaController@index')->name('indexreserva');
	/**asistencias */
	Route::post('/registerasistencia', 'ReservaController@store')->name('registerasistencia');
	Route::get('/registerasistencia', 'ReservaController@create');
	Route::get('/indexasistencia', 'AsistenciaController@index')->name('indexasistencia');

	/**sedes*/
	Route::get('/indexsedes', 'SedeController@index')->name('indexsedes');
	Route::get('/registersede', 'SedeController@create')->name('registersede');
	Route::post('/registersede', 'SedeController@store');
	/**iniciales */

	/**rutas de administrador */
	Route::get('/clases', 'ClaseController@index');
	Route::Post('/espacios', 'UserController@listarEspDep');
	Route::get('/listaclases', 'UserController@listaclases');
	/****************************** */

	/**Ajax */
	Route::post('/subscribe_user', 'ClaseController@subscribeUser');
	Route::post('/clase_reserva', 'ClaseController@reservarclase');
});


/**rutas de usuario*/
Route::group(['middleware'=>['auth','user']],function(){	
	Route::get('/user', 'HomeController@user')->name('user');
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/home', 'HomeController@index')->name('home');
	
});


//Auth::routes();






