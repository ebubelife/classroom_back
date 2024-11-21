<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

use App\Models\Videos;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(MembersController::class)->group(function(){
    //signup
    Route::post('/v1/signup', 'signup');

    //login
    Route::post('/v1/login', 'login');

    //send test email
    Route::post('/v1/test_email', 'test_email');

    //verify email
    Route::post('/v1/verify_email', 'verify_email');

    //send email
    Route::post('/v1/send_email', 'send_email');

    //change password
    Route::post('/v1/change_password', 'change_password');
    


});


Route::controller(App\Http\Controllers\NewsController::class)->group(function(){

    //get news
    Route::get('/v1/news', 'get_news');
});

Route::get('/videos/{subject}/{class}/{exam}', function ($subject, $class, $exam) {

    $videos = Videos::where('subject', $subject)->where('class',$class)->where('exam', $exam)->get();
    return response()->json(["data"=>$videos, "success"=>true, "status"=>"success"],200);


   
});



    