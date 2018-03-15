<?php
Route::resource('panel/carrera','controladorCarrera');
Route::resource('panel/categoria','controladorCategoria');
Route::resource('panel/empresa','controllerEmpresa');
Route::resource('panel/universidad','controllerUniversidad');
Route::resource('panel/usuarios','controladorUsuario');
Route::get('/panel','controladorPanel@inicio')->name('panel');
//Ruta Login
Route::get('/login','controladorLogin@inicio')->name('login-inicio');
Route::post('logueo','controladorLogin@logueo')->name('logueo');
Route::get('logout','controladorLogin@logout')->name('logout');
