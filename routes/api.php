<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\HotlineController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\BarangayController;
use App\Http\Controllers\Api\DirectoryController;

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

Route::group(['prefix' => 'services'], function(){
    Route::get('/search', [ServiceController::class, 'search'])->name('services.search');
    Route::get('/{id}-{slug?}', [ServiceController::class, 'show'])->name('services.show');
});

Route::group(['prefix' => 'directory'], function(){
    Route::get('/', [DirectoryController::class, 'index'])->name('services.index');
});

Route::group(['prefix' => 'barangay'], function(){
    Route::get('/', [BarangayController::class, 'index'])->name('barangay.index');
    Route::get('/{id}', [BarangayController::class, 'show'])->name('barangay.show');
});

Route::group(['prefix' => 'hotlines'], function(){
    Route::get('/', [HotlineController::class, 'index'])->name('hotline.index');
    Route::get('/categories', [HotlineController::class, 'categories'])->name('hotline.categories');
    Route::get('/{category}', [HotlineController::class, 'show'])->name('hotline.show');
});