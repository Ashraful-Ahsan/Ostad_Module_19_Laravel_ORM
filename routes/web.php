<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
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

// Route::get('/dosomething', [TasksController::class,'dosomething']);
// Route::get('/tasks', [TasksController::class,'index']);
// Route::get('/show/{Task}', [TasksController::class,'show']);

Route::resource('/tasks', TasksController::class);