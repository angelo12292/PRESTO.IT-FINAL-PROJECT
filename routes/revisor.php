<?php

use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;


<<<<<<< HEAD
Route::get('/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
=======
Route::get('/home', [RevisorController::class, 'index'])->name('revisor.index');
>>>>>>> 2e90f8c40c2a9905a4f2d764ebe75bf9e8b0ed6c
