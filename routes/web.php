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

//Route::get('/home', 'HomeController@index')->name('home');


 // Route::get('/welcome', function () {
 //     return view('welcome');
 // });

 //Route::group(['middleware'=>['Auth']],function(){

Route::group(['middleware'=>['auth','Admin']],function(){


//Principal
Route::get('/principal', 'HomeController@index');
// PERFIL
Route::get('/perfil','HomeController@perfil');
Route::put('/perfil','HomeController@editarPerfil');	
Route::post('/perfil', 'HomeController@update_avatar');

Route::get('admin/activar/{tipo}/{user}','HomeController@activar');
Route::get('admin/suspender/{tipo}/{user}','HomeController@suspender');

});


// REGISTROS
Route::get('investigador/registro','InvestigadorController@registro');	
Route::get('responsable/registro','ResponsableController@registro');	
Route::get('tecnico/registro','TecnicoController@registro');	

// Route::get('responsable/principal','HomeController@getDashboard');


