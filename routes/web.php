<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\Controller@index')->name('home');
Route::post('/update', 'App\Http\Controllers\Controller@updateStatus')->name('update.status');
Route::post('/login','App\Http\Controllers\Controller@login')->name('login.user');


