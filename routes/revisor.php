<?php

use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;



Route::get('/home', [RevisorController::class, 'index'])->middleware('IsRevisor')->name('revisor.index');

Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class, 'acceptAnnouncement'])->middleware('IsRevisor')->name('revisor.accept_announcement');

Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class, 'rejectAnnouncement'])->middleware('IsRevisor')->name('revisor.reject_announcement');
