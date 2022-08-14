<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\CompanyApiController;
use App\Http\Controllers\Api\DesignationApiController;
use App\Http\Controllers\Api\EmployeeApiController;
use App\Http\Controllers\Api\MenuApiController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('company', CompanyApiController::class)->only('index');
Route::apiResource('designation', DesignationApiController::class)->only('index');
Route::apiResource('employee', EmployeeApiController::class)->only('index');
Route::apiResource('menu', MenuApiController::class)->only('index');
Route::apiResource('articles', ArticleApiController::class)->only('index');


Route::get('politics',[ApiController::class,'article']);
Route::get('menus',[ApiController::class, 'menus']);