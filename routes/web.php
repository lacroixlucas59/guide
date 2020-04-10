<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PremierControleur@index');  /* Page d'accueil */
Route::get('/a-propos', 'PremierControleur@APropos'); /* Page à propos */
Route::get('/ag/{id}', 'PremierControleur@AG')->where('id', '[0-9]+'); /* Page d'un audioguide */
Route::get('/ag', 'PremierControleur@AGListe'); /* Page de la liste d'audioguide */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
