<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReportController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/tokens/create', function (Request $request) {
    $token = \App\Models\User::first()->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});

Route::group(['prefix' => 'report'], function(){

    Route::post('/emergency', [ReportController::class, 'emergency'])->name('report.emergency');
    
});