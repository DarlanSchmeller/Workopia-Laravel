<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::post('/jobs/', [JobController::class, 'store'])->name('jobs.store');
