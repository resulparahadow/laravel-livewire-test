<?php

use App\Livewire\PostList;
use App\Livewire\PostScheduleForm;
use Illuminate\Support\Facades\Route;

Route::get('/', PostScheduleForm::class)->name('posts.create');
Route::get('posts', PostList::class)->name('posts');

Route::get('verificate-email', function () {
    return 'email verification';
})->name('email.verification');
