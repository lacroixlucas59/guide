<?php
use Illuminate\Support\Facades\Auth;

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
Route::get('/interface', 'PremierControleur@interface');

Route::get('/creer', 'PremierControleur@creer'); /* Page à create */

Route::post('/tr', 'PremierControleur@tr'); /* Page de traitement de creer */

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();
/*
Route::get('/home', 'HomeController@index')->name('home');
*/
Route::get('/home', function () {
    return redirect('/');
});
