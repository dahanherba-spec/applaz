<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

use App\Http\Controllers\FundController;
Route::get('/fund',[FundController::class, 'index']);
Route::get('/fund/tambah',[FundController::class, 'tambah']);
Route::get('/fund/edit/{id}',[FundController::class, 'edit']);
Route::post('/fund/update',[FundController::class, 'update']);
Route::get('/fund/hapus/{id}',[FundController::class, 'hapus']);
Route::post('/fund/store',[FundController::class, 'store']);

use App\Http\Controllers\FinController;
Route::get('/fin',[FinController::class, 'index']);
Route::get('/fin/verifikasi/{id}',[FundController::class, 'verifikasi']);
Route::post('/fin/verified',[FundController::class, 'verified']);
Route::get('/fin/upload',[FinController::class, 'upload']);
Route::post('/fin/uploaddata',[FinController::class, 'uploaddata']);
