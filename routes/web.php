<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\BookingController;
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
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::post('/login', [LoginController::class,'login'])->name('login.action');
Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/register', [LoginController::class,'store'])->name('register.action');

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/about', [FrontendController::class,'about'])->name('about');
Route::get('/wahana', [FrontendController::class,'wahana'])->name('wahana');
Route::get('/promo', [FrontendController::class,'promo'])->name('promo');
Route::get('/booking', [FrontendController::class,'booking'])->name('booking');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/my_ticket', [FrontendController::class,'my_ticket'])->name('my_ticket');

Route::post('/booking_store', [FrontendController::class,'booking_store'])->name('booking.store');
Route::get('/payment/{id}', [FrontendController::class,'payment'])->name('payment');
Route::post('/booking_confirmation', [FrontendController::class,'booking_confirmation'])->name('booking.confirmation');
Route::get('/ticket/{id}', [FrontendController::class,'ticket'])->name('ticket');



Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('admin/ticket',TicketController::class);
    Route::get('/admin/ticket/delete/{id}', [TicketController::class,'destroy'])->name('ticket.hapus');
    Route::get('/admin/booking', [BookingController::class, 'index'])->name('booking.index');
});