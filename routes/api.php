<?php

use App\Http\Controllers\ListsController;
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

Route::get('/school/years', [ListsController::class, 'getSchoolYears']);

Route:: get('/gradelevel/{year}', [ListsController::class, 'getGradeLevels']);

Route:: get('/schooltype/{year}', [ListsController::class, 'getSchoolTypes']);

Route::get("/schools/{year?}", [ListsController::class, 'getSchools']);
Route::get("/school/{id}", [ListsController::class, 'getSchoolById']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
