<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');

Route::livewire('/', 'pages::beranda')->name('beranda');
Route::livewire('about', 'pages::about')->name('about');
Route::livewire('contact', 'pages::contact')->name('contact');
Route::livewire('services', 'pages::services')->name('services');
Route::livewire('portfolio', 'pages::portfolio')->name('portfolio');
