<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;

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
Route::post('/', [Controller::class, 'addEmail']);
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contacts');
});
Route::post('/contact', [MessageController::class, 'add']);
Route::get('/contacts/view', [Controller::class, 'view'])->middleware('auth');
Route::get('/messages/view', [MessageController::class, 'index'])->middleware('auth')->name('messages');
Route::get('/unsubscribe', [Controller::class, 'unsubscribeEmail']);
Route::get('/verify', [Controller::class, 'verifyEmail']);
