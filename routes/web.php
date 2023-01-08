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

//Route::get('/', function () {return view('welcome');});
//Route::get('/admin', function () {return view('admin.admin-layout');});
//Route::get('/index', function () {return view('admin.pages.main');})->name('admin');
//Route::get('/index.html', function () {return view('admin.pages.display');})->name('display');
//Route::get('/addpersonality.html', function () {return view('admin.pages.add');})->name('add');

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

// -- SkyDash pages
//Route::get('/charts-js', function () {return view('admin.pages.sky-dashboard-pages.charts.charts-js');})->name('charts-js');
//Route::get('/page400', function () {return view('admin.pages.sky-dashboard-pages.error_pages.page_not_found');})->name('page400');
//Route::get('/page500', function () {return view('admin.pages.sky-dashboard-pages.error_pages.page_server_error');})->name('page500');
//Route::get('/basic-elements', function () {return view('admin.pages.sky-dashboard-pages.form-elements.basic-elements');})->name('basic-elements');
//Route::get('/mdi-icons', function () {return view('admin.pages.sky-dashboard-pages.icons.mdi-icons');})->name('mdi-icons');
//Route::get('/basic-table', function () {return view('admin.pages.sky-dashboard-pages.tables.basic-table');})->name('basic-table');
//Route::get('/buttons', function () {return view('admin.pages.sky-dashboard-pages.ui-elements.buttons');})->name('buttons');
//Route::get('/dropdowns', function () {return view('admin.pages.sky-dashboard-pages.ui-elements.dropdowns');})->name('dropdowns');
//Route::get('/typography', function () {return view('admin.pages.sky-dashboard-pages.ui-elements.typography');})->name('typography');
//Route::get('/login', function () {return view('admin.pages.sky-dashboard-pages.user-pages.login');})->name('login');
//Route::get('/register', function () {return view('admin.pages.sky-dashboard-pages.user-pages.register');})->name('register');
//Route::get('/documentation', function () {return view('admin.pages.sky-dashboard-pages.documentation');})->name('documentation');
