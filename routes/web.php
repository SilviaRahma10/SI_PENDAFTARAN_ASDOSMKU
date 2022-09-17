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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/admin', function() {

    });

});

Route::group(['middleware' => ['auth', 'role:koordinator']], function() {

    Route::get('/Koordinator', function() {

    });
});

Route::group(['middleware' => ['auth', 'role:mahasiswa']], function() {
    Route::get('/mahasiswa', function() {

    });
});
