<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('start');
Route::get('/admin-listing', [UserController::class, 'adminList'])->name('admin');
Route::get('user-listing', [UserController::class, 'index'])->name('userListing');
Route::get('create-user', [UserController::class, 'create'])->name('userCreate');
Route::post('save-user', [UserController::class, 'store'])->name('userSave');
Route::get('show-user/{user}', [UserController::class, 'show'])->name('userShow');
Route::get('approve/{user}', [UserController::class, 'approve'])->name('userApprove');
Route::get('approved/{user}', [UserController::class, 'approved'])->name('userApproved');
Route::get('edit-user/{user}', [UserController::class, 'edit'])->name('userEdit');
Route::post('update-user/{user}', [UserController::class, 'update'])->name('userUpdate');
Route::post('delete-user/{user}', [UserController::class, 'destroy'])->name('userDelete');

