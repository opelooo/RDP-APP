<?php

use App\Http\Controllers\Basepage;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RumahRDPController;
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

Route::get('/', [Basepage::class, 'index']);

Route::get('/data-pegawai', [PegawaiController::class, 'index']);
Route::get('/data-pegawai/{pegawai:NO_PEKERJA}', [PegawaiController::class, 'show']);

Route::get('/data-rdp', [RumahRDPController::class, 'index']);
Route::get('/data-rdp/{rumahRDP:ALAMAT_RDP}', [RumahRDPController::class, 'show']);
