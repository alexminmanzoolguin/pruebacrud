<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
})->name('main');


Auth::routes();
Route::get('/home','homecontroller@index')->name('main');

Route::get('/cruds','ctudcontroller@index');
Route::post('/cruds','ctudcontroller@index');
Route::get('/cruds/(id)','ctudcontroller@destroy');
