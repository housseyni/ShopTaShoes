<?php

use App\Http\Controllers\Api\ShoeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Shoe;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/shoes', [ShoeController::class, 'index']);

// Route::get('/shoes/{id}', function ($id) {
//     return \App\Models\Shoe::find($id);
// });

Route::resource('shoes', App\Http\Controllers\Api\ShoeController::class);
