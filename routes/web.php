<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class,'home']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('company', CompanyController::class, ['names' => 'company']);
Route::resource('designation', DesignationController::class, ['names' => 'designation']);
Route::resource('employee', EmployeeController::class, ['names' => 'employee']);
Route::resource('menu', MenuController::class, ['names' => 'menu']);
Route::resource('articles', ArticleController::class, ['names' => 'articles']);

// Route::post('upload', [ArticleController::class, 'upload'])->name('ckeditor.upload');
// Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::post('upload', [ArticleController::class, 'upload'])->name('upload');
