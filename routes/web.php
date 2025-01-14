<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patients/export', function () {
    return 'Export';
})->name('patients.export');

Route::get('/patients/duplicate/{patient}', function ($patient) {
    return 'Here is the duplicate of ' . $patient;
})->name('patients.duplicate');

Route::get('/chat-app', function () {
    return view('chat-app');
})->name('chat-app');

