<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PremierControleur@index');
Route::get('/a-propos', 'PremierControleur@APropos');
Route::get('/p/{id}', 'PremierControleur@p')->where('id', '[0-9]+');