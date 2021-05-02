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

Route::post('/dashboard', '\App\Http\Controllers\DashboardController@createPost');

Route::get('/user', function () {
    return view('userForm');
});
Route::post('/user', '\App\Http\Controllers\DashboardController@editUser');

Route::get('/user/delete/{id}', '\App\Http\Controllers\DashboardController@delete')->middleware(['auth']);

require __DIR__.'/auth.php';
