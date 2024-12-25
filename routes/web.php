<?php

use App\Http\Controllers\FormProcessController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Add student result
Route::view('/add_result', 'add_result');
Route::post('add_result', [FormProcessController::class, 'addresult']);


// Show student record
Route::view('/result', 'show_result');
Route::get('show', [FormProcessController::class, 'show_result']);

//Search & Update student record by CNIC
Route::get('/search', [FormProcessController::class, 'showSearchForm'])->name('show.search.form');
Route::get('/search_result', [FormProcessController::class, 'searchByCnic'])->name('search.result');
Route::post('/update-result', [FormProcessController::class, 'updateResult'])->name('update.result');





