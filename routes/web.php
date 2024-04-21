<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('blocnote', NoteController::class)
->only(['index','create','store','show','edit','update','destroy']);
