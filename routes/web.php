<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::view('/', 'forms.registration')->name('register.get');

Route::post('/', [RegistrationController::class, 'store'])->name('registration.post');
