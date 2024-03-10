<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::post('/annunci.categoria', [PageController::class, 'searchByCategory'])->name('searchByCategory');

Route::get('/annunci/{id}', [AnnouncementController::class, 'announceView'])->name('announce.View');

Route::get('/categorie/{id}', [PageController::class, 'categoryView'])->name('category.View');




Route::middleware('auth')->group(function () {


    Route::get('/annunci', [PageController::class, 'show'])->name('show_announcements');
});

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
