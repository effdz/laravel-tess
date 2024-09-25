<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Sesicontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogActivity;
use App\Http\Controllers\ActivityLogController;


Route::get('/',[Sesicontroller::class, 'index'])->name('login')->middleware('guest');
Route::post('/',[Sesicontroller::class, 'login'])->middleware('guest');


// Route::get('/register', function () {
// return view('register');
// })->name('register');

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register-proses', [AuthController::class, 'register_proses'])->name('register-proses');
Route::get('/home', function(){
    return redirect('/admin');
});

Route::get('/admin',[AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/operator',[AdminController::class, 'operator'])->middleware('auth')->middleware('userAkses:operator');
Route::get('/admin/keuangan',[AdminController::class, 'keuangan'])->middleware('auth')->middleware('userAkses:keuangan');
Route::get('/admin/marketing',[AdminController::class, 'marketing'])->middleware('auth')->middleware('userAkses:marketing');
Route::get('/logout',[Sesicontroller::class, 'logout'])->middleware('auth');

Route::middleware([LogActivity::class])->group(function () {
});
Route::get('/activity-logs', [ActivityLogController::class, 'index'])->name('activity.logs');
