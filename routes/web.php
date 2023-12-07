<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\KtpController;
use App\Http\Controllers\MeninggalController;
use App\Http\Controllers\PindahController;
use App\Http\Controllers\ValidasiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {
  Route::get('/', [AuthController::class, 'index'])->name('login');
  Route::post('/', [AuthController::class, 'login']);
});
Route::get('/home', function () {
  if (Auth::user()->role == 'admin') {
    return redirect('admin');
  } elseif (Auth::user()->role == 'sukadamai') {
    return redirect('sukadamai');
  } elseif (Auth::user()->role == 'kebunbaru') {
    return redirect('kebunbaru');
  } elseif (Auth::user()->role == 'rejosari') {
    return redirect('rejosari');
  } elseif (Auth::user()->role == 'margoyoso') {
    return redirect('margoyoso');
  } elseif (Auth::user()->role == 'payungraja') {
    return redirect('payungraja');
  }
});

Route::middleware(['auth'])->group(function () {
  Route::get('admin', [UserController::class, 'index'])->name('admin');
  Route::get('sukadamai', [UserController::class, 'index'])->name('sukadamai')->middleware('userAkses:sukadamai');
  Route::get('kebunbaru', [UserController::class, 'index'])->name('kebunbaru')->middleware('userAkses:kebunbaru');
  Route::get('rejosari', [UserController::class, 'index'])->name('rejosari')->middleware('userAkses:rejosari');
  Route::get('margoyoso', [UserController::class, 'index'])->name('margoyoso')->middleware('userAkses:margoyoso');
  Route::get('payungraja', [UserController::class, 'index'])->name('payungraja')->middleware('userAkses:payungraja');


  Route::get('kk', [KkController::class, 'index']);
  Route::post('kk', [KkController::class, 'store']);
  Route::get('kk/{id}', [KkController::class, 'show']);

  Route::get('ktp', [KtpController::class, 'index']);
  Route::post('ktp', [KtpController::class, 'store']);
  Route::get('ktp/{id}', [KtpController::class, 'form']);

  Route::get('pindah',[PindahController::class, 'index']);
  Route::post('pindah/{id}',[PindahController::class, 'create']);

  Route::get('meninggal',[MeninggalController::class, 'index']);
  Route::post('meninggal/{id}',[MeninggalController::class, 'create']);

  Route::get('validasi',[ValidasiController::class, 'index']);



  Route::get('/logout', [AuthController::class, 'logout']);
});
