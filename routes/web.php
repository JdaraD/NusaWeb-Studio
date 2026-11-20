<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');

Route::livewire('/', 'pages::beranda')->name('beranda');
