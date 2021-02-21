<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
})->name('home');;

Route::get('/studentForm', function () {
    return view('studentForm');
})->name('studentForm');

Route::post('/studentForm/submit', [StudentController::class, 'submit'])->name('studentFormSubmission');

Route::get('/contact/messages', [MessageController::class, 'index'])->name('contactMessages');