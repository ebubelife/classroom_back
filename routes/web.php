<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\VideosController;

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




Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminMainController::class, 'dashboard'])->name('admin.dashboard');   
    Route::get('/admin/dashboard/videos', [VideosController::class, 'videos'])->name('admin.dashboard.videos');
    Route::get('/admin/dashboard/videos/add', [VideosController::class, 'add_videos'])->name('admin.dashboard.videos.add');
    Route::post('/admin/dashboard/videos/add', [VideosController::class, 'add_videos']);
    
  
});
