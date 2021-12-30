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

Route::get('/', [\App\Http\Controllers\MainPageController::class, 'index']);
Route::resource('moreinstitution','\App\Http\Controllers\MoreInsttitutionController');
//Route::resource('search','\App\Http\Controllers\MainPageController');
Route::get('/search',[\App\Http\Controllers\MainPageController::class, 'search']);
Route::get('/warning', [\App\Http\Controllers\Warning\WarningController::class, 'store']);
Route::get('/autocomplete-search', [\App\Http\Controllers\Admin\PersonalController::class, 'autocompleteSearch']);
Route::get('/search-institution', [\App\Http\Controllers\Admin\InstitutionController::class, 'searchInstitution']);
Route::get('/search-position', [\App\Http\Controllers\Admin\PositionController::class, 'searchPosition']);


//Export data to  word
Route::get('/generate-docx', [\App\Http\Controllers\Admin\DocxController::class, 'generateDocx']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('homeAdmin');

//'\App\Http\Controllers\Admin\PersonalController'

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post',\App\Http\Controllers\Admin\PostController::class);
    Route::resource('position', \App\Http\Controllers\Admin\PositionController::class);
    Route::resource('institution', \App\Http\Controllers\Admin\InstitutionController::class);
    Route::resource('personal', \App\Http\Controllers\Admin\PersonalController::class);
    Route::resource('type', \App\Http\Controllers\Admin\TypeController::class);
    Route::resource('warning', \App\Http\Controllers\Warning\WarningController::class);
   // Route::resource('autocomplete-search',\App\Http\Controllers\Admin\PersonalController::class);


});
