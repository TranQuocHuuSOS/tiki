<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;				
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/get-product',[APIController::class,'getProducts']);					
// Route::get('/get-product/{id}', [APIController::class,'getOneProduct']);								
// Route::post('/add-product',[APIController::class,'addProduct']);								
// Route::delete('/delete-product/{id}',[APIController::class,'deleteProduct']);								
// Route::put('/edit-product/{id}',[APIController::class,'editProduct']);								          
// Route::post('/upload-image',[APIController::class,'uploadImage']);

Route::get('/gets-product',[App\Http\Controllers\TikiController::class,'getProducts']);					
Route::get('/gets-product/{id}', [App\Http\Controllers\TikiController::class,'getOneProduct']);								
Route::post('/adds-product',[App\Http\Controllers\TikiController::class,'addProduct']);								
Route::delete('/deletes-product/{id}',[App\Http\Controllers\TikiController::class,'deleteProduct']);								
Route::put('/edits-product/{id}',[App\Http\Controllers\TikiController::class,'editProduct']);								          
Route::post('/upload-image',[App\Http\Controllers\TikiController::class,'uploadImage']);