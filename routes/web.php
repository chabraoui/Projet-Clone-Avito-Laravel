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
  $categories=App\Categorie::all();
    return view('welcome',['categories'=>$categories]);
});
// Route::get('annonces', 'AnnonceController@index' );
// Route::get('annonces', 'AnnonceController@create' )->name('annonce.create');
// Route::post('annonces/create', 'AnnonceController@store' )->name('annonce.store');
// Route::get('annonces/{id}/edit', 'AnnonceController@edit' );
// Route::get('annonces/{id}', 'AnnonceController@update' );
// Route::get('annonces/{id}', 'AnnonceController@destroy' );
Route::resource('annonces', 'AnnonceController' );
Route::resource('categories', 'CategorieController' );
Route::get('/annoncesFilter/{id}', 'AnnonceController@filterAnnonce');
Route::get('/search','AnnonceController@search' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
