<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/phone/store',[\App\Http\Controllers\PhoneController::class,'store']);
Route::get('phone',[\App\Http\Controllers\PhoneController::class,'index']);

Route::get('/post/store',[\App\Http\Controllers\PostController::class,'store']);
Route::get('/comment',[\App\Http\Controllers\PostController::class,'index']);

Route::get('/role-add',[\App\Http\Controllers\RoleController::class,'addRole']);
Route::get('/user-add',[\App\Http\Controllers\RoleController::class,'addUser']);
Route::get('/get-role',[\App\Http\Controllers\RoleController::class,'getRole']);

