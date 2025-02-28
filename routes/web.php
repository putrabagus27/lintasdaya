<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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
//Index Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/history', [HomeController::class, 'history']);
Route::get('/visi', [HomeController::class, 'visimisi']);
Route::get('/organization', [HomeController::class, 'organization']);
Route::get('/plumping', [HomeController::class, 'plumping']);
Route::get('/electrical', [HomeController::class, 'electrical']);
Route::get('/mechanical', [HomeController::class, 'mechanical']);
Route::get('/electronic', [HomeController::class, 'electronic']);
Route::get('/firegas', [HomeController::class, 'firegas']);
// Route::get('/services', [HomeController::class, 'services']);
Route::get('/project', [HomeController::class, 'project']);
Route::get('/projecttestpopup', [HomeController::class, 'projecttestpopup']);
Route::get('/download', [FileController::class, 'download'])->name('download');
Route::get('/download/upload', [FileController::class, 'upload'])->name('download.upload');
Route::post('/download/upload/store', [FileController::class, 'store']);
Route::get('/download/{file}/unduh', [FileController::class, 'unduh'])->name('download.unduh');
Route::post('/downloadfile', [FileController::class, 'downloadfile']);
// Route::post('/download/getdata', [FileController::class, 'getdata']);
Route::get('/testimonial', [HomeController::class, 'testimonial']);
Route::get('/contactus', [ContactController::class, 'contactus']);
Route::post('/contactus', [ContactController::class, 'sendMail']);
