<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('dashboard', [PageController::class, 'dashboard'])
        ->middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ])
        ->name('dashboard');

Route::resource('notes', NoteController::class)
        ->middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ]);
