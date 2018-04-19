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
    return view('template');
});

Auth::routes();

Route::patch('evenements/{id_Evenement}/vote','EvenementsController@vote');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('evenements','EvenementsController');
Route::get('evenements{n}', 'EvenementsController@show')->where('n' ,'[0-9]+');
Route::get('evenements{n}/edit', 'EvenementsController@edit')->where('n' ,'[0-9]+');

//Route::resource('evenementsValider','EvenementsValiderController');
//Route::resource('/','PhotoController');

Route::resource('evenementsValider','EvenementsValiderController');
Route::resource('/','PhotoController');
Route::post('commentaires/{photo_id}',['uses'=>'CommentairesController@store','as'=>'commentaires.store']);
Route::delete('commentaires/{photo_id}',['uses'=>'CommentairesController@destroy','as'=>'commentaires.destroy']);

Route::resource('users','UserController');

Route::resource('/','PhotoController');

Route::get('/{n}', 'PhotoController@show')->where('n' ,'[0-9]+');

Route::resource('evenementsValider','EvenementsValiderController');
Route::get('evenementsValider{n}', 'EvenementsValiderController@show')->where('n' ,'[0-9]+');

Route::resource('produits','ProduitsController');

Route::get('/{n}', 'PhotoController@show')->where('n' ,'[1-9]+');

Route::post('evenementsValider/{id_Evenement}',['uses'=>'EvenementsValiderController@store','as'=>'inscription.store']);




