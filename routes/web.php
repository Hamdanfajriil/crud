<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//login Route
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

//register Route
Route::get('/auth/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/auth/register', [RegisterController::class, 'store']);

//crud Route
Route::get('crud/dashboard', [CrudController::class, 'index'])->middleware('auth');
Route::resource('crud', CrudController::class);
//contoh alur:
//Route get => mahasiswa => index
//Route get => mahasiswa/create => create
//Route post => mahasiswa => store
//Route get => mahasiswa/{id} => show
//Route put => mahasiswa/{id} => update
//Route delete =>mahasiswa/{id} => delete
//Route get => mahasiswa/{id} => edit
