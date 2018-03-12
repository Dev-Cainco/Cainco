<?php
Route::resource('panel/usuarios','controladorUsuario');
Route::resource('panel/carreras','controladorCarrera');
Route::get('/panel','controladorPanel@inicio')->name('panel');
//Ruta Login
Route::get('/login','controladorLogin@inicio')->name('login-inicio');
Route::post('logueo','controladorLogin@logueo')->name('logueo');
Route::get('logout','controladorLogin@logout')->name('logout');
<<<<<<< HEAD

=======
>>>>>>> origen/master
