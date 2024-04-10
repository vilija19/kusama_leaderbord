<?php

use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\ValidatorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get', 'post'],'/', [LeaderboardController::class,'index'])->name('home.index');
Route::post('/add_to_wish', [LeaderboardController::class,'add_to_wish'])->name('validator.add_wish');
Route::post('/acknowledge', [LeaderboardController::class,'acknowledge_new_version'])->name('validator.acknowledge');
Route::get('/validator/{id}', [ValidatorController::class,'show'])->name('validator.show');

