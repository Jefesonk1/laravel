<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\Role;
use App\Http\Controllers\RoleController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([], function(){

    Route::resource('role', RoleController::class)->except('create','edit');

    // Route::post('/role', [RoleController::class, 'store']);
    // Route::get('/role', [RoleController::class, 'index']);
    // Route::get('/role/{id}', [RoleController::class, 'show']);
    // Route::put('/role/{id}', [RoleController::class, 'update']);
    // Route::delete('/role/{id}',[RoleController::class, 'destroy'] );
});





