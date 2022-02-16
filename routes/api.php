<?php

use App\Models\Product;
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

Route::get('/employee/create',[\App\Http\Controllers\EmployeeController::class,'create']);
Route::get('/employee/show',[\App\Http\Controllers\EmployeeController::class,'search']);
Route::get('/employee/delete/{id}',[\App\Http\Controllers\StudentController::class,'destroy']);

Route::get('/Store/create',[\App\Http\Controllers\StoreController::class,'create']);


Route::post('/product/create',[\App\Http\Controllers\ProductController::class,'save']);
Route::post('/product/view',[\App\Http\Controllers\ProductController::class,'show']);
Route::get('/product/delete/{id}',[\App\Http\Controllers\ProductController::class,'destroy']);
Route::post('update',[\App\Http\Controllers\ProductController::class,'Update']);
Route::get('access',[\App\Http\Controllers\AccessoriesController::class,'accessories']);
Route::get('cmodel',[\App\Http\Controllers\ProductController::class,'cmodel']);
Route::get('product/model/{id}',[\App\Http\Controllers\ProductController::class,'comodel']);






