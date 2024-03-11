<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\EmailSentsController;
use Illuminate\Support\Facades\Route;

Route::get('/inserisci_annuncio', [AccountController::class,'insertAnnouncement'])->name('insert_announcement');

Route::get('/annunci', [AccountController::class, 'showAnnouncements'])->name('show_announcements');

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');

Route::get('/home', [RevisorController::class, 'index'])->middleware('IsRevisor')->name('revisor.index');

Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class, 'acceptAnnouncement'])->middleware('IsRevisor')->name('revisor.accept_announcement');

Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class, 'rejectAnnouncement'])->middleware('IsRevisor')->name('revisor.reject_announcement');

Route::get('/contatta/venditore/{user}', [AccountController::class, 'contactVendor'])->name('contact.vendor');

Route::post('/email/sents/store',[EmailSentsController::class,'store'])->name('emailSents.store');