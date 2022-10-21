<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/',[CategoryController::class, 'index']);
Route::post('/create',[CategoryController::class, 'store']);
Route::delete('/delete/{category:id}',[CategoryController::class, 'destory']);
Route::patch('/edit/{category:id}',[CategoryController::class, 'update']);
