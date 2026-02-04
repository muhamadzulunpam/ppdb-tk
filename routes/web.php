<?php

use App\Models\Delivery;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;

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

// Menampilkan halaman utama atau welcome page

Route::get('/', [HomeController::class, 'Dashboard'])->name('Dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// ADMIN
Route::get('/admin', [AdminController::class, 'index'])->name('admin');


Route::get('/pendaftaran/{id}', [AdminController::class, 'pendaftaranShow'])->name('pendaftaran.show');
Route::get('/data-pendaftaran', [AdminController::class, 'pendaftaranAdmin'])->name('pendaftar.admin');
Route::delete('/pendaftaran/{id}', [AdminController::class, 'pendaftaranDestroy'])->name('pendaftaran.destroy');
Route::get('/pendaftaran/{id}/edit', [AdminController::class, 'pendaftaranEdit'])->name('pendaftaran.edit');
Route::put('/pendaftaran/{id}', [AdminController::class, 'pendaftaranUpdate'])->name('pendaftaran.update');
// Tampilkan form pendaftaran (admin)
Route::get('/admin/pendaftaran/create', [AdminController::class, 'pendaftaranCreate'])->name('pendaftaran.admin.create');
Route::post('/admin/pendaftaran/store', [AdminController::class, 'pendaftaranStore'])->name('pendaftaran.store');


Route::get('/data-admin', [AdminController::class, 'dataAdmin'])->name('data.admin');
// create
Route::get('/admin-create', [AdminController::class, 'adminCreate'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'AdminStore'])->name('admin.store');
// edit
Route::get('/admin/{id}/edit', [AdminController::class, 'adminEdit'])->name('admin.edit');
Route::put('/admin/{id}', [AdminController::class, 'adminUpdate'])->name('admin.update');
// hapus
Route::delete('/admin/{id}', [AdminController::class, 'adminDestroy'])->name('admin.destroy');

// Form Pendaftaran 3 Step
Route::post('/pendaftaran/create', [PendaftaranController::class, 'pendaftaranCreate'])->name('pendaftaran.create');

// Route::get('/data-pendaftaran', [AdminController::class, 'pendaftaranAdmin'])->name('pendaftaran.admin');