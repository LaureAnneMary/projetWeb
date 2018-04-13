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

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home/ru','Rang_utilisateurController@index');

//Route::resource('rang_utilisateur', 'PostsController');

Route::get('/', function (){
    return view('accueil');
});
Route::get('/Boite-à-idées', function (){
    return view('Boite-à-idées');
});
Route::get('/Toutes-les-manifestations', function (){
    return view('Toutes-les-manifestations');
});
Route::get('/Boutique', function (){
    return view('Boutique');
});
Route::get('/Connexion', function (){
    return view('Connexion');
});
