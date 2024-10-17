<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminMainController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', function () {
    return view('admin_login');
});


Route::post('/login_admin_user', [AdminMainController::class, 'login_admin_user'])->name('admin.login_admin_user');




Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminMainController::class, 'dashboard'])->name('admin.dashboard');
    
    

  
});
