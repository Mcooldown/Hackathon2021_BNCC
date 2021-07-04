<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\ChatConsultationController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Accomodations
Route::get('/accomodations', [AccomodationController::class, 'index'])->name('accomodations.index');
Route::get('/accomodations/create', [AccomodationController::class, 'indexCreate']);
Route::post('/accomodations/createAccomodation', [AccomodationController::class, 'store'])->name('storeAccomodation');
Route::get('/accomodations/show',[AccomodationController::class,'show'])->name('accomodation.show');
Route::get('/accomodations/delete{id}',[AccomodationController::class,'delete'])->name('accomodation.delete');

//Room
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'indexCreate']);
Route::post('/rooms/createRoom', [RoomController::class, 'create'])->name('createRoom');
Route::get('/rooms/show', [RoomController::class, 'show'])->name('rooms.show');


// Booking
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Checkout
Route::get('/checkouts', [CheckoutController::class, 'index'])->name('checkouts.index');
Route::get('/checkouts/{booking}', [CheckoutController::class, 'create'])->name('checkouts.create');
Route::post('/checkouts', [CheckoutController::class, 'store'])->name('checkouts.store');
Route::get('/history', [CheckoutController::class, 'history']);

// Consultation
Route::get('/consultations', [ConsultationController::class, 'index'])->name('consultations.index');
Route::get('/consultations/{consultant}', [ConsultationController::class, 'create'])->name('consultations.create');
Route::post('/consultations', [ConsultationController::class, 'store'])->name('consultations.store');

// Chat Consultation
Route::get('/chat-consultations', [ChatConsultationController::class, 'index'])->name('chat-consultations.index');
Route::get('/chat-consultations/{consultation}', [ChatConsultationController::class, 'show'])->name('chat-consultations.show');
Route::post('/chat-consultations', [ChatConsultationController::class, 'store'])->name('chat-consultations.store');
Route::get('/chat-consultations-ota', [ChatConsultationController::class, 'otaIndex'])->name('chat-consultations.ota');

//Rating
Route::get('/ratings', [RatingController::class, 'index'])->name('ratings.index');
Route::post('/ratings/createRating', [RatingController::class, 'store'])->name('storeRating');


//profile
Route::get('/profile', [UserController::class, 'index'])->name('profile');
Route::PUT('/profile/{id}', [UserController::class, 'update'])->name('profile.update');
