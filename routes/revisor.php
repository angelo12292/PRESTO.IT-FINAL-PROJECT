<?php

use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [RevisorController::class, 'index'])->name('revisor.index');
