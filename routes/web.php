<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MapLocation;
use App\Http\Livewire\GetLocation;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\MainDashboard;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/map', MapLocation::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/main-dashboard', MainDashboard::class);
Route::get('/titik/json', [GetLocation::class, 'titik']);
