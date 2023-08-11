<?php

use App\Http\Controllers\IssueController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'aboutPage']);
Route::get('/about', [PageController::class,'aboutPage']);
Route::get('/associateEditors', [PageController::class,'associateEditors']);
Route::get('/callForReviewers', [PageController::class,'callForReviewers']);
Route::get('/editorInChief', [PageController::class,'editorInChief']);
Route::get('/editors', [PageController::class,'editors']);
Route::get('/guidelinesForAuthor', [PageController::class,'guidelinesForAuthor']);
Route::get('/internationalAdvisoryCommittee', [PageController::class,'internationalAdvisoryCommittee']);
Route::get('/publicationEthics', [PageController::class,'publicationEthics']);
Route::get('/reviewPolicy', [PageController::class,'reviewPolicy']);
Route::get('/subscription', [PageController::class,'subscription']);
Route::get('/form', [PageController::class,'form']);




