<?php

use App\Http\Controllers\VoteController;
use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('acceuil', 'acceuil')
    ->middleware(['auth', 'verified', 'student'])
    ->name('acceuil');

Route::view('admin', 'admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

Route::view('superadmin', 'superadmin')
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('superadmin');

Route::view('userdb', 'userdb')
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('userdb');

Route::view('candidatdb', 'candidatdb')
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
