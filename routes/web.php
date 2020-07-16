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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/add_demandes', 'DemandeController@store')->name('demande.store');
Route::get('/alldemandes', 'DemandeController@index')->name('demande.all');
Route::post('/demandes/{demandeId}', 'DemandeController@destroy')->name('demande.delete');
Route::post('/demandes/{demandeId}/edit', 'DemandeController@edit')->name('demande.edit');
Route::post('/demandes/{demandeId}/update', 'DemandeController@update')->name('demande.update');
Route::get('/gmaps', 'MapsController@index')->name('maps.get');
Route::get('/gmapsadd/{lat}/{lng}', 'MapsController@viewstore')->name('maps.store');
Route::post('/addoffre', 'MapsController@store')->name('offre.store');
Route::get('/alloffres', 'OffreController@index')->name('offres.all');