<?php

use App\Http\Controllers\API\CategotyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {return $request->user();});

Route::get('/users', [UserController::class, 'getUsers']);
Route::apiResource("category", CategotyController::class)->only(["index", "show"]);

//// Address [CRUD]
// City [R]
// Commune [R]
// Region [R]
// Country [R]

//// Phones [CRUD]

//// Chat [CR]
// Messages [CR]

//// Categories [R]

//// Products [R]
// Images [R]
// Commentary [CR]
// Responses [CR]

//// Buy [CR]
// Details [CR]

//// Orders [CR]
// Details [CR]
