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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('evenements','EvenementsController');
Route::get('evenements{n}', 'EvenementsController@show')->where('n' ,'[1-9]+');

Route::resource('evenementsValider','EvenementsValiderController');
Route::resource('accueil','PhotoController');
Route::post('commentaires/{photo_id}',['uses'=>'CommentairesController@store','as'=>'commentaires.store']);

Route::resource('users','UserController');

