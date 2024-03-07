<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnouncementController;
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




Route::middleware('auth')->group(function () {


    Route::get('/annunci', [PageController::class, 'show'])->name('show_announcements');

    Route::get('/annunci/{id}', [AnnouncementController::class, 'announceView'])->name('announce.View');
});
