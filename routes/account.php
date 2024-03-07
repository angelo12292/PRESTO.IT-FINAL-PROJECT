<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/inserisci_annuncio', [AccountController::class,'insertAnnouncement'])->name('insert_announcement');
Route::get('/annunci', [AccountController::class, 'showAnnouncements'])->name('show_announcements');