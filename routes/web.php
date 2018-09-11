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
Route::get ('/homeEspera','HomeController@espera');
Route::get('responsable/biobanco','ResponsableController@biobanco');
Route::post('responsable/biobanco','HomeController@crearBiobanco');
//Route::get('/home', 'HomeController@index')->name('home');


 // Route::get('/welcome', function () {
 //     return view('welcome');
 // });

 //Route::group(['middleware'=>['Auth']],function(){

Route::group(['middleware'=>['auth','Admin']],function(){

//Principal
Route::get('/principal', 'HomeController@principal');
// PERFIL
Route::get('/perfil','HomeController@perfil');
Route::put('/perfil','HomeController@editarPerfil');	
Route::post('/perfil', 'HomeController@update_avatar');
//Activar y suspender usuarios
Route::get('admin/activar/{tipo}/{user}','HomeController@activar');
Route::get('admin/suspender/{tipo}/{user}','HomeController@suspender');
//Deposito
Route::get('/deposito','HomeController@deposito');
//Depositante
Route::get('/deposito/depositante','HomeController@depositanteRegistro');
Route::post('deposito/depositante','HomeController@crearDepositante');
//Pacientes
Route::get('/deposito/paciente','HomeController@pacienteRegistro');
Route::post('deposito/paciente','HomeController@crearPaciente');
//Muestras
Route::get('deposito/muestra','HomeController@muestraRegistro');
Route::post('deposito/muestra','HomeController@crearMuestra');
//Historicos
Route::get('/historico','HomeController@historico');

//Unidad de Almacenamiento
Route::get('/almacenamiento','HomeController@almacenamiento');
//Armario
Route::get('/almacenamiento/armario','HomeController@armarioRegistro');
Route::post('almacenamiento/armario','HomeController@crearArmario');
//Congelador
Route::get('/almacenamiento/congelador','HomeController@congeladorRegistro');
Route::post('almacenamiento/congelador','HomeController@crearCongelador');
//Tanque
Route::get('/almacenamiento/tanque','HomeController@tanqueRegistro');
Route::post('almacenamiento/tanque','HomeController@crearTanque');
});

Route::get('admin/activar/{tipo}/{user}','HomeController@activar');

// REGISTROS
Route::get('investigador/registro','InvestigadorController@registro');	
Route::get('responsable/registro','ResponsableController@registro');
// Route::get('responsable/biobanco','ResponsableController@biobanco');	
Route::get('tecnico/registro','TecnicoController@registro');
Route::post('tecnico/registro', 'HomeController@subir_imagen');	

// Route::get('responsable/principal','HomeController@getDashboard');


