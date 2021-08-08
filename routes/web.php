<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('materials', \App\Http\Controllers\MaterialController::class);

Route::resource('rooms', \App\Http\Controllers\RoomController::class);

Route::resource('people', \App\Http\Controllers\PersonController::class);

Route::resource('material_types', \App\Http\Controllers\MaterialTypeController::class);

Route::resource('material_rooms', \App\Http\Controllers\MaterialRoomController::class);

Route::resource('material_people', \App\Http\Controllers\MaterialPersonController::class);

Route::resource('downgradeds', \App\Http\Controllers\DowngradedController::class);

Route::resource('roles', \App\Http\Controllers\RoleController::class);
