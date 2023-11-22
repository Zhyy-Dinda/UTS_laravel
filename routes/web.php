<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PicController;
use App\Http\Controllers\ProgresController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MalasngodingController;
use Symfony\Component\Console\Input\Input;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('template.app');
});

// Authentication
// Route::get('/login', [AuthController::class, 'getViewLogin'])->name('login')('guest');
// Route::get('/', [AuthController::class, 'getViewLogin'])->middleware('guest');
Route::post('/loginAuth', [AuthController::class, 'authenticate'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Dashboard
Route::get('/dashboard', function () {
    $title = 'Dashboard';
    return view('dashbooard', compact('title'));
})->name('dashboard');
// Register User
Route::get('/user', [AuthController::class, 'getViewUser'])->name('register');
Route::post('/user/create', [AuthController::class, 'simpan'])->name('simpan_user');
// Bagian
Route::get('/bagian', [BagianController::class, 'getview'])->name('bagian');
Route::post('/bagian/create', [BagianController::class, 'insertData'])->name('insert_bagian');
Route::put('/bagian/update/{id}', [BagianController::class, 'updateData']);
Route::delete('/bagian/delete/{id}', [BagianController::class, 'deleteData']);
// pegawai
Route::get('/pegawai', [PegawaiController::class, 'getView'])->name('pegawai');
Route::post('/pegawai/create', [PegawaiController::class, 'insertData'])->name('insert');
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'updatedata']);
Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'deleteData']);
// pic
Route::get('/pic', [PicController::class, 'getView'])->name('pic');
Route::post('/pic/create', [PicController::class, 'insertData'])->name('insert_pic');
Route::put('/pic/update/{id}', [PicController::class, 'updateData']);
Route::delete('/pic/delete/{id}', [PicController::class, 'deleteData']);
// kategori
Route::get('/kategori', [KategoriController::class, 'getView'])->name('kategori');
Route::post('/kategori/create', [KategoriController::class, 'insertData'])->name('insert_kategori');
Route::put('/kategori/update/{id}', [KategoriController::class, 'updateData']);
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'deleteData']);
// Progres
Route::get('/progres', [ProgresController::class, 'getView'])->name('progres');
Route::post('/progres/create', [ProgresController::class, 'insertData'])->name('insert_progres');
Route::put('/progres/update/{id}', [ProgresController::class, 'updateData']);
Route::delete('/progres/delete/{id}', [ProgresController::class, 'deleteData']);
// Kebutuhan
Route::get('/kebutuhan', [KebutuhanController::class, 'getView'])->name('kebutuhan');
Route::post('/kebutuhan/create', [KebutuhanController::class, 'insertData'])->name('insert_kebutuhan');
Route::post('/kebutuhan/update/{id}', [KebutuhanController::class, 'updateData']);
Route::delete('/kebutuhan/delete/{id}', [KebutuhanController::class, 'deleteData']);
// Pengajuan Kebutuhan
Route::get('/pengajuan', [PengajuanController::class, 'getView'])->name('pengajuan');
Route::post('/pengajuan/create', [PengajuanController::class, 'insertData'])->name('insert_pengajuan');
Route::put('/pengajuan/update/{id}', [PengajuanController::class, 'updateData']);
Route::delete('/pengajuan/delete/{id}', [PengajuanController::class, 'deleteData']);
