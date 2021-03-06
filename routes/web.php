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
    return view('index');
});

Route::get('faqs', function()
{
    return View('faqs');
});
Route::get('register', function()
{
    return View('register');
});
Route::get('login', function()
{
    return View('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

