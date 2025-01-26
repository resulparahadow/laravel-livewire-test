<?php

use App\Livewire\PostScheduleForm;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', PostScheduleForm::class);
Route::get('posts', PostScheduleForm::class)->name('posts');

Route::get('verificate-email', function () {
    return 'email verification';
})->name('email.verification');
