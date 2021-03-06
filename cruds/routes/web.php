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
    return view('welcome');
})->name('main');


Route::get('/home','homecontroller@index')->name('main');

Route::get('/crud','ctudcontroller@index');
Route::post('/crud','ctudcontroller@savedemo');
Route::put('users/{id}', function ($id) {
    ('/crud/(id)');
});
Route::delete('users/{id}', function ($id) {
    ('/crud/(id)');
});
