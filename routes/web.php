<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Mail\Mailable;
use app\Mail;
use App\Mail\MyTestMail;
use App\Http\Controllers\MailController;

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


Route::get('send-mail', [MailController::class, 'index']);

// Route::get('/send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \App\mail\MyTestMail::to('mrizkirifaldi9@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     dd("Email is Sent.");
// });