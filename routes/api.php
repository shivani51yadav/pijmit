<?php

use App\Http\Controllers\IssueController;
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

// API routes
Route::get('/issues', [IssueController::class,'index']);
Route::post('/issues',[IssueController::class,'store']);
Route::get('/issue/{id}',[IssueController::class,'show']);
Route::put('/issue/{id}',[IssueController::class,'update']);
Route::delete('/issue/{id}',[IssueController::class,'destroy']);


