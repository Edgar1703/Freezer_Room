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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


//Ejemplo de ruta
Route::resource('libro', 'LibroController');


//Rutas de mi proyecto
Route::resource('temperatura', 'TemperaturaController');
Route::resource('bitacora', 'BitacoraController');

Route::resource('seccion', 'SeccionController');
Route::resource('carne', 'CarneController');
Route::resource('verdura', 'VerduraController');
Route::resource('fruta', 'FrutaController');
Route::resource('marisco', 'MariscoController');

Route::resource('producto', 'ProductoController');

Route::resource('empleado', 'EmpleadoController');

route::get('libro', 'LibroController@index');
route::get('libro/{id}', 'LibroController@show')->where(['id' => '[0-9]+']);
route::get('libro/crear', 'LibroController@create');
route::post('libro/crear', 'LibroController@store');












