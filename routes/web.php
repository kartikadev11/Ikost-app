<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\rekomendasiWebController;
use App\Http\Controllers\webController;
use App\Http\Controllers\webkosController;
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

// Route::get('/', function () {
//     return view('homeAdmin');
// });

//ROUTES FOR ADMIN
// LOGIN, REGISTER, AND LOGOUT
Route::get('/admin',[homeController::class,'index']) -> middleware('cekLogin');
Route::get('/sesi',[SessionController::class,'index'])-> middleware('isTamu');
//Route::get('/sesi/login',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/register', [SessionController::class, 'create']);

//CRUD DAFTAR KOS
Route::get('/daftarKos',[KosController::class,'index']);
Route::get('/createKos',[KosController::class,'create']);
Route::post('/simpanKos',[KosController::class,'store']);
Route::get('/editKos/{id}',[KosController::class,'edit']);
Route::post('/updateKos/{id}',[KosController::class,'update']);
Route::get('/deleteKos/{id}',[KosController::class,'destroy']);

//CRUD KRITERIA
Route::get('/daftarKriteria',[KriteriaController::class,'index']);
Route::get('/createKriteria',[KriteriaController::class,'create']);
Route::post('/simpanKriteria',[KriteriaController::class,'store']);
Route::get('/editKriteria/{id}',[KriteriaController::class,'edit']);
Route::post('/updateKriteria/{id}',[KriteriaController::class,'update']);
Route::get('/deleteKriteria/{id}',[KriteriaController::class,'destroy']);

//PERHITUNGAN SPK
Route::get('/nilaiAlternatif', [PerhitunganController::class,'alternatif']);
Route::get('/normalisasi', [PerhitunganController::class,'normalisasi']);
Route::get('/hasilKali', [PerhitunganController::class,'pengkali']);
Route::get('/perangkingan', [PerhitunganController::class,'hasil']);

// ROUTES FOR USER
Route::get('/',[webController::class,'index']);
Route::get('/ikost/daftarkos',[webkosController::class,'index']);
Route::get('/ikost/rekomendasi',[rekomendasiWebController::class,'index']);
Route::get('/ikost/editKriteria/{id}',[rekomendasiWebController::class,'edit']);
Route::post('/ikost/updateKriteria/{id}',[rekomendasiWebController::class,'update']);
Route::get('/ikost/perhitungan', [rekomendasiWebController::class,'pengkali']);
Route::get('/ikost/rangking', [rekomendasiWebController::class,'hasil']);