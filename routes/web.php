<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;

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
Route::post('/contact', [ContactController::class, 'add']);
Route::get('/unsubscribe', [Controller::class, 'unsubscribeEmail']);
Route::get('/verify', [Controller::class, 'verifyEmail']);
