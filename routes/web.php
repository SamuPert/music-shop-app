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

Route::get('/', function () {

    return view('home');
});

Route::get('/staff', function () {
    return view('adminStaff');
});

Route::get('/admin', function () {
    return view('adminPage');
});

Route::get('/onlineshop',function (){
    return view('buyContacts');
});
Route::get('/homepage', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
