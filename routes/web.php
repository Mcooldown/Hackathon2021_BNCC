<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\AccomodationController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/accomodations/{city_id}/{qty}', [AccomodationController::class, 'index']);
Route::get('/accomodations/create', [AccomodationController::class, 'indexCreate']);

Route::post('/accomodations/createAccomodation', [AccomodationController::class, 'store'])->name('storeAccomodation');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');

Route::get('/rooms/{accomodation}/{qty}', [RoomController::class, 'index'])->name('rooms.index');
