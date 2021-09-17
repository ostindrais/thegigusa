<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageController;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contacts');
});
Route::post('/contact', [MessageController::class, 'add']);
Route::get('/contacts/view', [Controller::class, 'view']);
Route::get('/messages/view', [MessageController::class, 'index']);
Route::get('/unsubscribe', [Controller::class, 'unsubscribeEmail']);
Route::get('/verify', [Controller::class, 'verifyEmail']);
