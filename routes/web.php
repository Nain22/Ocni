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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/set_language/{lang}' , 'Controller@setLanguage')->name('set_language');

Route::group(["prefix" => "admin" , "middleware" => ["auth"]] , function(){
    Route::get('/profile' , 'ProfileController@index')->name('profile.index');
    Route::put('/profile' , 'ProfileController@update')->name('profile.update');

    Route::get('/idioma' , 'IdiomaController@index')->name('idioma.index');
    Route::get('/idiomaretornar' , 'IdiomaController@retornar')->name('idioma.index');
});

