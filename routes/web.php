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
    return redirect()->route('login');
});

Auth::routes();

Route::name('admin.')->group(function () {
  Route::group(['prefix' => 'admin', 'middleware' => ['role:superadministrator|administrator'], 'name' => 'admin.'], function() {
      Route::get('/dashboard', 'HomeController@index')->name('dashboard');
      Route::resource('/clients', 'ClientController');
  });
});

Route::name('user.')->group(function () {
  Route::group(['prefix' => 'user', 'middleware' => ['role:user']], function() {
      Route::get('/dashboard', 'HomeController@index')->name('dashboard');
      Route::resource('/clients', 'ClientController', ['only' => ['index','show']]);
  });
});
