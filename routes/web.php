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
    return view('inicio');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/welcome', function () {
//     return view('welcome');
// });

//Principal
Route::get('/principal', 'HomeController@index');

// REGISTROS
Route::get('investigador/registro','InvestigadorController@registro');	
Route::get('responsable/registro','ResponsableController@registro');	
Route::get('tecnico/registro','TecnicoController@registro');	

// PERFIL
Route::get('investigador/perfil','InvestigadorController@perfil');
Route::get('responsable/perfil','ResponsableController@perfil');	
Route::get('tecnico/perfil','TecnicoController@perfil');
Route::get('administrador/perfil','AdministradorController@perfil');