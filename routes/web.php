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

// Route::get('/', function () {
//     return view('welcome');
// });

//auth
Route::get('login', 'Auth\LoginController@login');

Route::group(['middleware' => ['auth']], function() {
//  Route::auth();
});

Route::get('/login', function(){

   return View::make('auth.login');

});

//general
Route::get('/', function(){

   return View::make('pages.home');

});

Route::get('/home', function(){

   return View::make('pages.home');

});

Route::get('/about', function(){

   return View::make('pages.contact');

});

//customer

Route::get('/cekmobil', function () {

    return View::make('customer.cekmobil');

});

Auth::routes();

Route::get('home', 'HomeController@index')->name('pages.home');
