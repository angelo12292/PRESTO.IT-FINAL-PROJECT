<?php

use App\Http\Controllers\PageController;
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

Route::middleware('auth')->group(function () {
    Route::get('/inserisci_annuncio', function () {
        return view('livewire.insert-announcement');
    })->name('livewire.insert-announcement');
    Route::get('/annunci', function () {
        return view('livewire.show-announcements');
    })->name('livewire.show-announcements');

  Route::get('/inserisci_annuncio', function () {
    return view('insert_announce');
        })->name('insert_announce');
    
});

