<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/student/list',[\App\Http\Controllers\StudentController::class,'search']);
Route::post('/student/create',[\App\Http\Controllers\StudentController::class,'create']);
Route::post('/student/update',[\App\Http\Controllers\StudentController::class,'update']);
Route::get('/student/delete/{id}',[\App\Http\Controllers\StudentController::class,'destroy']);

Route::post('/employee/create',[\App\Http\Controllers\EmployeeController::class,'create']);
Route::get('/employee/show',[\App\Http\Controllers\EmployeeController::class,'search']);
Route::get('/employee/delete/{id}',[\App\Http\Controllers\StudentController::class,'destroy']);
