<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolumeController;
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



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index']);


    // Volumes Routes
    Route::get('/volumes', [VolumeController::class, 'index'])->name('volumes');
    Route::post('/volumes', [VolumeController::class, 'store'])->name('volumes.store');
    Route::any('/volumes/delete/{vol_no}', [VolumeController::class, 'destroy'])->name('volumes.destroy');
    Route::any('/volumes/show/{vol_no}', [VolumeController::class, 'show'])->name('volumes.show');
    Route::get('volumes/{volume}/issues', [VolumeController::class, 'showIssues'])->name('volumes.issues');
    Route::get('/volumes/{vol_no}/edit', [VolumeController::class, 'edit'])->name('volumes.edit');
    Route::put('/volumes/{vol_no}', [VolumeController::class, 'update'])->name('volumes.update');
    Route::post('volumes/{vol_no}',[VolumeController::class,'changeStatus'])->name('volumes.changeStatus');


    //Issues Routes
    Route::get('/issuetable', [IssueController::class, 'index'])->name('issues');
    Route::any('/issues/delete/{issue_no}/{vol_no}', [IssueController::class, 'destroy'])->name('issues.destroy');
    Route::get('issues/show/{issue_no}/{vol_no}', [IssueController::class, 'show'])->name('issues.show');
    Route::any('/issues/store', [IssueController::class, 'store'])->name('issues.store');
    Route::get('/issuesNo/{vol_no}', [IssueController::class, 'apifunction'])->name('apifunction');
    Route::get('issues/edit/{issue_no}/{vol_no}', [IssueController::class, 'edit'])->name('issues.edit');
    Route::put('issues/update/{issue_no}/{vol_no}', [IssueController::class, 'update'])->name('issues.update');
    Route::get('/get-issues/{vol_no}',  [IssueController::class, 'getIssues']);
    Route::get('/issue/search/{keyword}', [IssueController::class, 'search']);
    Route::post('issues/{vol_no}/{issue_no}',[IssueController::class,'changeStatus'])->name('issues.changeStatus');


    //Papers Routes
    Route::get('/papertable', [PaperController::class, 'index'])->name('papers');
    Route::any('/papers/delete/{paper_no}', [PaperController::class, 'destroy'])->name('papers.destroy');
    Route::get('papers/{vol_no}/{issue_no}/{paper_no}', [PaperController::class, 'show'])->name('papers.show');
    Route::post('/papers/store/', [PaperController::class, 'store'])->name('papers.store');
    Route::get('papers/{vol_no}/{issue_no}/{paper_no}/edit', [PaperController::class, 'edit'])->name('papers.edit');
    Route::put('papers/{vol_no}/{issue_no}/{paper_no}', [PaperController::class, 'update'])->name('papers.update');
    // Route::post('papers/{vol_no}/{issue_no}/{paper_no}',[PaperController::class,'changeStatus'])->name('papers.changeStatus');
    Route::get('/change-status/{vol_no}/{issue_no}/{paper_no}', [PaperController::class,'changeStatus'])->name('papers.changeStatus');

});


Route::get('/', [PageController::class, 'aboutPage']);
Route::get('/about', [PageController::class, 'aboutPage']);
Route::get('/associateEditors', [PageController::class, 'associateEditors']);
Route::get('/callForReviewers', [PageController::class, 'callForReviewers']);
Route::get('/editorInChief', [PageController::class, 'editorInChief']);
Route::get('/editors', [PageController::class, 'editors']);
Route::get('/guidelinesForAuthor', [PageController::class, 'guidelinesForAuthor']);
Route::get('/internationalAdvisoryCommittee', [PageController::class, 'internationalAdvisoryCommittee']);
Route::get('/publicationEthics', [PageController::class, 'publicationEthics']);
Route::get('/reviewPolicy', [PageController::class, 'reviewPolicy']);
Route::get('/subscription', [PageController::class, 'subscription']);
Route::get('/currentIssue', [PageController::class, 'currentIssue']);
Route::get('/oldIssue', [PageController::class, 'oldIssue']);
Route::get('/form', [PageController::class, 'form']);


require __DIR__ . '/auth.php';
