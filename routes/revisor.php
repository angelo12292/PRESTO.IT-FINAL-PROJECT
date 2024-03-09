<?php

use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;


Route::get('/revisore/home', [RevisorController::class, 'index'])->name('revisor.index');