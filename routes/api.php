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

Route::apiResource('apicompany', CompanyApiController::class);
Route::apiResource('apidesignation', DesignationApiController::class)->only('index');
Route::apiResource('apiemployee', EmployeeApiController::class);
Route::apiResource('apimenu', MenuApiController::class);
Route::apiResource('apiarticles', ArticleApiController::class);

Route::get('politics',[ApiController::class,'article']);
Route::get('menus',[ApiController::class, 'menus']);