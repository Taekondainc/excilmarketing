<?php

use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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


    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('logout',   [Authcontroller::class,'logout']);
        Route::post('user',   [Authcontroller::class,'user']);
    });

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('Addproducts', [ActionController::class, 'Created']);
Route::post('getproducts',  [ActionController::class, 'view']);
Route::post('Delete',  [ActionController::class, 'delete']);
Route::post('getinfo', [ActionController::class, 'getinfo']);
Route::post('editproducts',[ActionController::class, 'editproducts']);
Route::post('searchproducts', [ActionController::class, 'searchproducts']);
Route::post('getcount',  [ActionController::class, 'getcount']);

Route::post('message',[ActionController::class, 'message']);
Route::post('Messages',[ActionController::class, 'messages']);

Route::post('createapp',[ActionController::class, 'appointment']);

Route::post('appointments', [ActionController::class, 'appointments']);

Route::get('appointments', [ActionController::class, 'appointments']);
Route::post('AddEvents',  [ActionController::class, 'CreatedEvents']);
Route::post('viewEvents',  [ActionController::class, 'viewEvents']);
Route::post('DeleteEvents',  [ActionController::class, 'deleteEvents']);
Route::post('getEvents', [ActionController::class, 'getEvents']);
Route::post('editEvents',  [ActionController::class, 'editEvents']);
Route::post('searchEvents', [ActionController::class, 'searchEvents']);


Route::post('addjoblisting',  [ActionController::class,'joblisting']);
Route::post('joblisting',  [ActionController::class,'jobs']);
Route::post('applyjob',  [ActionController::class,'addapplicant']);
Route::post('viewapplicants',  [ActionController::class,'viewappl']);

Route::post('updatejob',  [ActionController::class,'updjob']);
Route::post('updappl',  [ActionController::class,'updappl']);
Route::post('jobget',  [ActionController::class,'jobget']);
Route::post('joblistingsearch',  [ActionController::class,'joblistingsearch']);
