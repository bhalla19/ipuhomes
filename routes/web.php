<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class ,'homepage'])->name('homepage');
Route::get('/aboutus',[UserController::class,'aboutUs'])->name('about');
Route::get('/contactUs',[UserController::class , 'contactUsForm'])->name('contactUsForm');
Route::post('/contactUs',[UserController::class,'contactForm'])->name('contactForm');
Route::get('/findYourRoomie',[UserController::class , 'roomieForm'])->name('roomieForm');
Route::get('/college',[UserController::class,'colleges'])->name('college');
Route::get('/roomie',[UserController::class,'roomie'])->name('roomie');
Route::get('/tecniaInstituteOfAdvancedStudies',[UserController::class,'tecniaPg'])->name('tecniaPg');
Route::get('/RukmaniDeviInstituteOfAdvancedStudies',[UserController::class,'rukmaniPg'])->name('rukmaniPg');
Route::get('/bediPayingGuest',[UserController::class,'bediPG'])->name('bediPG');
