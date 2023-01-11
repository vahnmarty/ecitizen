<?php

use App\Http\Livewire\User\MyReports;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ReportEmergency;
use App\Http\Controllers\PageController;
use App\Http\Livewire\RespondentDashboard;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmergencyController;
use App\Http\Livewire\Report\EmergencyDashboard;

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



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('hotlines', [PageController::class, 'hotlines'])->name('hotlines');
Route::get('directory', [PageController::class, 'directory'])->name('directory');

Route::group(['middleware' => 'auth'], function(){
    Route::get('emergency', ReportEmergency::class)->name('emergency');
    Route::get('my-reports', MyReports::class)->name('user-reports');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('emergency/dashboard', EmergencyDashboard::class);
Route::get('emergency/respondent-dashboard', RespondentDashboard::class);

require __DIR__.'/auth.php';
