<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('Note',[NoteController::class,'Note'])->name('Note');
    Route::post('Note_store',[NoteController::class, 'Note_store'])->name('Note_store');
    Route::get('Note_edit/{id}',[NoteController::class,'Note_edit'])->name('Note_edit');
    Route::post('Note_edit_update',[NoteController::class,'Note_edit_update'])->name('Note_edit_update');
    Route::get('Note_delete/{id}',[NoteController::class,'Note_delete'])->name('Note_delete');
    
});
