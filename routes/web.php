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

Route::get('/', [\App\Http\Controllers\MailerController::class, 'index']);
Route::post('/', [\App\Http\Controllers\MailerController::class, 'store'])->name('mailer.store');

Route::get('/{uuid}/success', [\App\Http\Controllers\MailerController::class, 'show'])->name('mailer.show');
