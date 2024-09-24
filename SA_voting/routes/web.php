<?php

use App\Http\Controllers\VoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;

Route::view('/', 'welcome');

Route::view('acceuil', 'acceuil')
    ->middleware(['auth', 'verified', 'student'])
    ->name('acceuil');

Route::view('admin', 'admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

Route::get('superadmin', [SuperAdminController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('superadmin');

Route::get('userdb', [UserController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('userdb');

Route::get('candidatdb', [CandidatController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('candidatdb');

Route::view('resultatdb', 'resultatdb')
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('resultatdb');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/vote', [VoteController::class, 'index'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('vote');

Route::get('/candidat', [CandidatController::class, 'index'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('candidat');



require __DIR__.'/auth.php';
