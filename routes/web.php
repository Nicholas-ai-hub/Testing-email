<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use  App\Http\Controllers\NewContactController;


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
    return view('contact_form');
});

// Route::get('/main', [CountController::class, 'index']);
// Route::post('/main', [CountController::class, 'store']);

// Route::get('/blade', [ContactController::class, 'send']);


Route::post('/send', [MailController::class, 'sendContactMail'])->name('send.contact_mail');

