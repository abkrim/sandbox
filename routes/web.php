<?php

// Invalid is for Livewire 1
// Route::livewire('/register', 'register');
Route::get('/register', \App\Http\Livewire\Auth\Register::class);
