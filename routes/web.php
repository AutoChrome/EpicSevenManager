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

Route::get('/hero/{hero}', 'HeroController@show')->name('hero.show');

Route::get('/equipment', 'EquipmentController@index')->name('equipment.index');

Route::get('/profile/{user}/edit', 'UserController@edit')->name('user.edit');
Route::patch('/profile/{user}', 'UserController@update')->name('user.update');