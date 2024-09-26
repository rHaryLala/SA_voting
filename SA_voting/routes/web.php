<?php

use App\Http\Controllers\VoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResultatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;

Route::view('/', 'welcome');


//Route pour Views
Route::view('acceuil', 'acceuil')
    ->middleware(['auth', 'verified', 'student'])
    ->name('acceuil');

Route::view('admin', 'admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');


Route::view('candidat', 'candidat')
    ->middleware(['auth', 'verified', 'student'])
    ->name('candidat');

Route::view('resultatdb', 'resultatdb')
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('resultatdb');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//Route pour GET
Route::get('/vote', [VoteController::class, 'index'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('vote');

Route::get('superadmin', [SuperAdminController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('superadmin');

Route::get('userdb', [UserController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('userdb');

Route::get('candidatdb', [CandidatController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('candidatdb');

Route::get('studentdb', [StudentController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('studentdb');

Route::get('resultatdb', [ResultatController::class, 'index'])
    ->middleware(['auth', 'verified', 'superadmin'])
    ->name('resultatdb');


//Route pour POST
Route::post('/vote/{id}', [VoteController::class, 'vote'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('vote.submit');

require __DIR__.'/auth.php';
