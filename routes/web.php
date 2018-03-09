<?php
Route::get('/panel','controladorPanel@inicio')->name('panel');
//Ruta Login
Route::get('/login','controladorLogin@inicio')->name('login-inicio');
Route::post('logueo','controladorLogin@logueo')->name('logueo');
Route::get('logout','controladorLogin@logout')->name('logout');
Route::resource('carreras','controladorCarrera');
Route::resource('universidad'.'controllerUniversidad');