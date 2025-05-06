<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::view('/', 'forms.registration');

Route::post('/', [RegistrationController::class, 'store'])->name('registration.post');
