<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ImageController;

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


/*
|--------------------------------------------------------------------------
| Routes for SiteController
|--------------------------------------------------------------------------
*/

Route::controller(SiteController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/how-it-works', 'howItWorks');
    Route::post('/contact/send', 'sendContactFormMessage');
    Route::get('/build', 'build');
});


/*
|--------------------------------------------------------------------------
| Routes for ImageController
|--------------------------------------------------------------------------
*/

// Route:: controller(ImageController::class)->group(function(){
//     Route::get('images/upload', 'index');
//     Route::post('images/store', 'store')->name('image.store');
//     Route::get('images/compress', 'compressToWebp');
//     Route::get('images/compress/directory', 'compressDirectoryToWebp');
//     Route::get('images/resize', 'resizeImage');
// });




Route::get('send-mail', [MailController::class, 'index']);




