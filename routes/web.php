<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cucian;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResiController;

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

Route::get('/', [Controller::class, 'dashboard'])->middleware('auth');

Route::get('/add-cucian', [Cucian::class, 'addCucian']);
Route::post('/add-cucian', [Cucian::class, 'saveCucian']);
Route::get('/edit/{id}', [Cucian::class, 'editCucian']);
Route::post('/update', [Cucian::class, 'updateCucian']);
Route::get('/delete/{id}', [Cucian::class, 'deleteCucian']);
Route::post('/delete', [Cucian::class, 'destroyCucian']);

Route::get('/pegawai', [UserController::class, 'index']);
Route::get('/add-pegawai', [UserController::class, 'create']);
Route::post('/add-pegawai', [UserController::class, 'store']);
Route::get('/edit-pegawai/{id}', [UserController::class, 'edit']);
Route::post('/edit-pegawai', [UserController::class, 'update']);
Route::get('/delete-pegawai/{id}', [UserController::class, 'delete']);
Route::post('/delete-pegawai', [UserController::class, 'destroy']);

Route::get('/resi', [ResiController::class, 'index']);

Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/login-check', [Controller::class, 'loginCheck']);
Route::post('/logout', [Controller::class, 'logout'])->middleware('auth');

