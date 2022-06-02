<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/registro/solista/nuevo', 'ArtistasController@solista')->name('solista.nuevo');
Route::get('/registro/banda/nuevo', 'ArtistasController@banda')->name('banda.nuevo');

Route::post('/registro/banda/nuevo/guardar', 'ArtistasController@storeBanda')->name('banda.guardar');
Route::post('/registro/solista/nuevo/guardar', 'ArtistasController@storeSolista')->name('solista.guardar');
Route::post('/integrantes', 'ArtistasController@listadoIntegrantes')->name('integrantes.agregar');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/home', 'HomeController@index')->name('dashboard');
Route::get('/admin/administradores', 'AdministradoresController@index')->name('administradores.listado');
Route::get('/admin/registrados', 'HomeController@registrados')->name('registrados.listado');

Route::get('/admin/ficha/{idArtista}', 'HomeController@ficha')->name('ficha');
Route::get('/admin/pre-clasificados', 'HomeController@listadoPreClasificados')->name('preclasificados.listado');
Route::get('/admin/no-clasificados', 'HomeController@listadoNoClasificados')->name('noclasificados.listado');

Route::post('/admin/pre-clasificar', 'HomeController@preclasificar')->name('preclasificar');
Route::post('/admin/pre-seleccionar', 'HomeController@preseleccionar')->name('preseleccionar');
Route::post('/admin/descalificar', 'HomeController@descalificar')->name('descalificar');

Route::get('/admin/listado/seleccionados', 'HomeController@listadoseleccionados')->name('listadoseleccionados');
Route::post('/admin/evaluar/seleccionado/{idArtista}', 'HomeController@evaluarSeleccionado')->name('evaluarSeleccionado');

Route::get('/admin/clasificados/{tipo}/zona-norte', 'HomeController@clasificadosNorte')->name('clasificadosNorte');
Route::get('/admin/clasificados/{tipo}/zona-centro', 'HomeController@clasificadosCentro')->name('clasificadosCentro');
Route::get('/admin/clasificados/{tipo}/zona-sur', 'HomeController@clasificadosSur')->name('clasificadosSur');
Route::get('/admin/{tipo}/clasificados', 'HomeController@rankingclasificados')->name('rankingclasificados');

Route::get('/admin/preclasificados/zona-norte', 'HomeController@preClasificadosNorte')->name('preClasificadosNorte');
Route::get('/admin/preclasificados/zona-centro', 'HomeController@preClasificadosCentro')->name('preClasificadosCentro');
Route::get('/admin/preclasificados/zona-sur', 'HomeController@preClasificadosSur')->name('preClasificadosSur');

Route::get('/admin/preseleccionados/zona-norte', 'HomeController@preSeleccionadosNorte')->name('preSeleccionadosNorte');
Route::get('/admin/preseleccionados/zona-centro', 'HomeController@preSeleccionadosCentro')->name('preSeleccionadosCentro');
Route::get('/admin/preseleccionados/zona-sur', 'HomeController@preSeleccionadosSur')->name('preSeleccionadosSur');



Route::get('/admin/seleccionados/{tipo}/zona-norte', 'HomeController@seleccionadosNorte')->name('seleccionadosNorte');
Route::get('/admin/seleccionados/{tipo}/zona-centro', 'HomeController@seleccionadosCentro')->name('seleccionadosCentro');
Route::get('/admin/seleccionados/{tipo}/zona-sur', 'HomeController@seleccionadosSur')->name('seleccionadosSur');
Route::get('/admin/ranking/{tipo}/seleccionados', 'HomeController@rankingseleccionados')->name('rankingseleccionados');

Route::post('/admin/evaluar/{idArtista}/{zona}', 'HomeController@evaluar')->name('evaluar');

Route::get('/admin/administradores/nuevo', 'AdministradoresController@create')->name('administrador.nuevo');
Route::post('/admin/administradores/guardar', 'AdministradoresController@store')->name('administrador.store');
Route::get('/admin/administradores/{id}/edit', 'AdministradoresController@edit')->name('administrador.edit');
Route::put('/admin/administradores/{id}', 'AdministradoresController@update')->name('administrador.update');
Route::delete('/admin/administradores/{id}', 'AdministradoresController@destroy')->name('administrador.delete');
