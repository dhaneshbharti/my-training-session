<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/sample', [\App\Http\Controllers\HomeController::class, 'Sample']);
Route::get('/view', [\App\Http\Controllers\HomeController::class, 'View']);
Route::get('/create', [\App\Http\Controllers\HomeController::class, 'Create']);
Route::get('/user/dhanesh', [\App\Http\Controllers\HomeController::class, 'userdhanesh']);
Route::get('/edit', [\App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/rose', [\App\Http\Controllers\HomeController::class, 'rose']);
Route::get('/userupdate', [\App\Http\Controllers\HomeController::class, 'userupdate']);
Route::get('/user/show', [\App\Http\Controllers\HomeController::class, 'usershow']);
Route::get('/user/update/{id}', [\App\Http\Controllers\HomeController::class, 'userupdate']);

Route::get('/createpro', [\App\Http\Controllers\HomeController::class, 'product']);


Route::get('/user/create', [\App\Http\Controllers\HomeController::class, 'userCreate']);
Route::get('/user/list', [\App\Http\Controllers\HomeController::class, 'userList']);
Route::get('/user/edit/{id}', [\App\Http\Controllers\HomeController::class, 'userEdit']);

Route::get('/view2', [\App\Http\Controllers\HomeController::class, 'joe']);


