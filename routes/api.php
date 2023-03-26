<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\TeachingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/signin', [Usercontroller::class,'signin']);
Route::post('/signup', [Usercontroller::class,'sigpupform']);
Route::post('/userinfoset', [Usercontroller::class,'userinfoset']);
Route::get('/getuser/{email}', [Usercontroller::class,'getuserinfo']);
Route::post('/Teachinpost', [ TeachingController::class,'Teachinpost']);
Route::get('/getAllpost', [ TeachingController::class,'getAllpost']);
Route::get('/userApply/{id}', [ TeachingController::class,'userApply']);
Route::get('/Allteacherpost/{id}', [ TeachingController::class,'Allteacherpost']);
Route::post('/Applypost', [ TeachingController::class,'Applypost']);