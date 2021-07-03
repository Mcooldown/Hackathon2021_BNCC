<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RoomController;

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

//Rating
Route::get('/ratings',[RatingController::class,'index'])->name('ratings.index');
Route::post('/ratings/createRating',[RatingController::class,'store'])->name('storeRating');
