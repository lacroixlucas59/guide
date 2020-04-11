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
<<<<<<< HEAD
Route::get("/ag/create", 'PremierControleur@create');
Route::post('/ag', 'PremierControleur@store');
=======
Auth::routes();
/*
Route::get('/home', 'HomeController@index')->name('home');
*/
Route::get('/home', function () {
    return redirect('/');
});
>>>>>>> 8df4dc11fd72b9783ff1182f3b1e5b49bc4bab9a
