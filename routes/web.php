<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AuthController;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//AUTHENTICATION FORM PLEASE TOUCH WITH CARE! /------------------------------------------------
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/process', [AuthController::class, 'process']);

Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register']);
// Route::post('/register', [AuthController::class, 'register']);

Route::post('/store', [AuthController::class, 'store']);

// /------------------------------------------------------
// /------------------------------------------------------

//Pages from middleware but only in admin /-------------------------------------------------
Route::middleware(['auth','admin'])->group(function(){
Route::get('/dashboard/hotel', [AdminController::class, 'hotel']);
Route::get('/dashboard/income', [AdminController::class, 'income']);
Route::get('/payment', [AdminController::class, 'payment']);
Route::get('/reservation', [AdminController::class, 'reservation']);
Route::get('/cancel', [AdminController::class, 'cancel']);

//CRUD for admin please DONT TOUCH!/
//-------------------------------------------------------
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/create', [AdminController::class, 'store']);
Route::get('/dashboard/admin/{id}', [AdminController::class, 'show']);
Route::put('/dashboard/admin/{id}', [AdminController::class, 'update']);
Route::delete('/dashboard/hotel/{id}', [AdminController::class,'destroy']);
Route::get('/dashboard/userData', [HotelController::class, 'userData']);
});

//CRUD for user Details   /---


// /---------------------------------------------------------------------------------------
// /--------------------------------------------------------------------------------------
//CRUD STORE for users please DONT TOUCH!/---------------------------------------------------------
Route::group(['prefix'=>'hotels','as'=>'hotel.'], function() {
Route::get('userData/create', [HotelController::class,'create']);
Route::post('/userData/create', [HotelController::class,'store']);
});




// /---------------------------------------------------------------------------------------
// /--------------------------------------------------------------------------------------
//Hotel Controller /----------------------------------------------------------------------
Route::get('/', [HotelController::class, 'index']);





//Clients BASE here!! CRUD!! DONT TOUCH!! /-------------------------------------------------



//HOTELS /---------------------------------------------------------------------------------------
Route::get('/ocean101', [HotelController::class, 'ocean101']);
Route::get('/hillside', [HotelController::class, 'hillside']);
Route::get('/maya', [HotelController::class, 'maya']);
Route::get('/punta', [HotelController::class, 'punta']);
Route::get('/soeliana', [HotelController::class, 'soeliana']);
Route::get('/dahun', [HotelController::class, 'dahun']);
Route::get('/ocean101r1', [HotelController::class, 'ocean101r1']);
Route::get('/ocean101r2', [HotelController::class, 'ocean101r2']);
Route::get('/ocean101r3', [HotelController::class, 'ocean101r3']);






