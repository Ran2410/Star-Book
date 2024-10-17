<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('main.home');
})->middleware('auth');

Route::get('/register', function () {
    return view('main.register');
});

Route::get('/library', function () {
    return view('main.library');
});

Route::get('/register', [RegisterController::class, 'showRegisterForm']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('main.login');
});


Route::post('/login', [AuthController::class, 'login']); 

Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 