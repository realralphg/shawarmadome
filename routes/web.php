<?php

use Illuminate\Support\Facades\Route;

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

// Route for Welcome - Shawarma Dome!
Route::get('/', function () {
    return view('welcome');
});

// Route for /shawarmas view with QP - contains the most information - index action
Route::get('/shawarmas', 'ShawarmaController@index')->name('shawarmas.index')->middleware('auth');

// Form - Using Post method to acces strore action/controller
Route::post('/shawarmas', 'ShawarmaController@store')->name('shawarmas.store');

// New Route to Add Shawarmas - Ensure to place above '/shawarmas/{id}' - create action
Route::get('/shawarmas/create', 'ShawarmaController@create')->name('shawarmas.create');

// Route for Single Shawarma Route Parameterswith show action
Route::get('/shawarmas/{id}', 'ShawarmaController@show')->name('shawarmas.show')->middleware('auth');

// Route to delete record wih destroy action
Route::delete('/shawarmas/{id}', 'ShawarmaController@destroy')->name('shawarmas.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
