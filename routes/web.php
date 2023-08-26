<?php

use App\Http\Controllers\IssueController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\VolumeController;

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
Route::get('/currentIssue', [PageController::class,'currentIssue']);
Route::get('/oldIssue', [PageController::class,'oldIssue']);
Route::get('/form', [PageController::class,'form']);
Route::get('/issue/search/{keyword}',[IssueController::class,'search']);

Route::get('/dashboard', [AdminController::class,'dashboard']);
// Add more routes for other pages as needed
Route::get('/admin',[AdminController::class,'index']);

// Route::get('/statisticscards', [AdminController::class,'statistics_cards']);
Route::get('/volumes', [VolumeController::class,'index'])->name('volumes');
// Route::post('/volumes', [VolumeController::class, 'store'])->name('volume.store');

Route::get('/issuetable', [IssueController::class,'index'])->name('issues');
Route::get('/papertable', [PaperController::class,'index'])->name('papers');

Route::any('/volumes/delete/{vol_no}',[VolumeController::class,'destroy'])->name('volumes.destroy');
Route::any('/volumes/show/{vol_no}',[VolumeController::class,'show'])->name('volumes.show');
Route::any('/issues/delete/{issue_no}/{vol_no}',[IssueController::class,'destroy'])->name('issues.destroy');
Route::any('/papers/delete/{paper_no}',[PaperController::class,'destroy'])->name('papers.destroy');

// Additional route for showing issues associated with a volume
Route::get('volumes/{volume}/issues', [VolumeController::class, 'showIssues'])->name('volumes.issues');


// Route::get('/volumes', [VolumeController::class, 'index'])->name('volumes.index');
Route::post('/volumes', [VolumeController::class, 'store'])->name('volumes.store');
// Route::get('/volumes/{vol_no}', [VolumeController::class, 'show'])->name('volumes.show');
Route::get('/volumes/{vol_no}/edit', [VolumeController::class, 'edit'])->name('volumes.edit');
Route::put('/volumes/{vol_no}', [VolumeController::class, 'update'])->name('volumes.update');
// Route::delete('/volumes/{vol_no}', [VolumeController::class, 'destroy'])->name('volumes.destroy');

Route::get('issues/show/{issue_no}/{vol_no}', [IssueController::class, 'show'])->name('issues.show');
// Route::get('/issues/show/{vol_no}/{issue_no}', [IssueController::class, 'show'])->name('issues.show');
Route::any('/issues/store', [IssueController::class, 'store'])->name('issues.store');
Route::get('/issuesNo/{vol_no}', [IssueController::class, 'apifunction'])->name('apifunction');
// Route::any('/issues//{issue_no}edit', [IssueController::class, 'update'])->name('issues.update');

// Route::get('issues/edit/{issue_no}', [IssueController::class, 'edit'])->name('issues.edit');
// Route::any('issues/update/{issue_no}',  [IssueController::class, 'update'])->name('issues.update');

Route::get('issues/edit/{issue_no}/{vol_no}', [IssueController::class, 'edit'])->name('issues.edit');
Route::put('issues/update/{issue_no}/{vol_no}', [IssueController::class, 'update'])->name('issues.update');

Route::get('/get-issues/{vol_no}',  [IssueController::class, 'getIssues']);
Route::get('papers/{vol_no}/{issue_no}/{paper_no}', [PaperController::class, 'show'])->name('papers.show');
Route::post('/papers/store/', [PaperController::class, 'store'])->name('papers.store');

// Edit Paper Form
Route::get('papers/{vol_no}/{issue_no}/{paper_no}/edit', [PaperController::class, 'edit'])->name('papers.edit');

// Update Paper
Route::put('papers/{vol_no}/{issue_no}/{paper_no}', [PaperController::class, 'update'])->name('papers.update');
