<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [mahasiswaController::class, 'index']);
Route::get('create', [mahasiswaController::class, 'create']);
Route::post('store', [mahasiswaController::class, 'store']);
Route::get('/show/{id}', [mahasiswaController::class, 'show']);
Route::get('/update/{id}', [mahasiswaController::class, 'update']);
Route::get('/destroy/{id}', [mahasiswaController::class, 'destroy']);