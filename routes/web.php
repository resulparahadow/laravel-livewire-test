<?php

use App\Livewire\PostScheduleForm;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', PostScheduleForm::class);
