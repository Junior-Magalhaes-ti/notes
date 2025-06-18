<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

// auth routes
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});


// app routes
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    // new note
    Route::get('/newNote', [MainController::class, 'newNote'])->name('new');
    // new note submit
    Route::post('/newNoteSubmit', [MainController::class, 'newNoteSubmit'])->name('newNoteSubmit');


    // edit note
    Route::get('/editNote/{id}', [MainController::class, 'editNote'])->name('edit');
    // edit note submit
    Route::post('/editNoteSubmit', [MainController::class, 'editNoteSubmit'])->name('editNoteSubmit');
    // delete note
    Route::get('/deleteNote/{id}', [MainController::class, 'deleteNote'])->name('delete');
    // delete 
    Route::get('deleteConfirm/{id}', [MainController::class, 'deleteConfirm'])->name('deleteConfirm');


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
