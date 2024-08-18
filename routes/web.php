<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;

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

Route::get('/service',[homeController::class,'service']);
Route::get('/',[AdminController::class,'home']);
Route::get('/home',[AdminController::class,'home']);
Route::get('/menu',[homeController::class,'menu']);
Route::get('/contact',[homeController::class,'contact']);
Route::get('/booking',[homeController::class,'booking']);;
Route::get('/team',[homeController::class,'team']);;
Route::get('/testimentail',[homeController::class,'testimentail']);;
Route::get('/about',[homeController::class,'about']);
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/adminnn',[AdminController::class,'index'])->name('adminnn');
Route::get('/create_table',[AdminController::class,'create_table'])->name('create_table');
Route::post('/add_table',[AdminController::class,'add_table'])->name('add_table');
Route::get('/view_table',[AdminController::class,'view_table'])->name('view_table');
Route::get('/tableDelete/{id}',[AdminController::class,'tableDelet'])->name('tableDelete');
Route::get('/tableUpdate/{id}',[AdminController::class,'tableUpdate'])->name('tableUpdate');
Route::post('/editTable/{id}',[AdminController::class,'editTable'])->name('editTable');
Route::get('/tableDetalils/{id}',[HomeController::class,'tableDetalils'])->name('tableDetalils');
Route::post('/add_booking/{id}',[HomeController::class,'add_booking'])->name('add_booking');
Route::get('/bookings',[AdminController::class,'bookings'])->name('bookings');
Route::get('/BookingDelete/{id}',[AdminController::class,'BookingDelete'])->name('BookingDelete');
Route::get('/approve_book/{id}',[AdminController::class,'approve_book'])->name('approve_book');
Route::get('/rejected_book/{id}',[AdminController::class,'rejected_book'])->name('rejected_book');
Route::post('/add_contact',[HomeController::class,'add_contact'])->name('add_contact');
Route::get('/all_messages',[AdminController::class,'all_messages'])->name('all_messages');
Route::get('/send_email/{id}',[AdminController::class,'send_email'])->name('send_email');
Route::post('/mail/{id}',[AdminController::class,'mail'])->name('mail');
Route::get('/add_chef',[AdminController::class,'add_chef'])->name('add_chef');
Route::post('/create_chef',[AdminController::class,'create_chef'])->name('create_chef');
Route::get('/all_chefs',[AdminController::class,'all_chef'])->name('all_chef');
Route::get('/chefDelete/{id}',[AdminController::class,'chefDelete'])->name('chefDelete');
Route::get('/chefUpdate/{id}',[AdminController::class,'chefUpdate'])->name('chefUpdate');
Route::post('/editchef/{id}',[AdminController::class,'editchef'])->name('editchef');


