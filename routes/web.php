<?php
Route::get('/panel','controladorPanel@inicio')->name('panel');
//Ruta Login
Route::get('/login','controladorLogin@inicio')->name('login-inicio');