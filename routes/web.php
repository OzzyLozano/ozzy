<?php

use Illuminate\Support\Facades\Route;

Route::domain(env('APP_DOMAIN'))->group(function () {
  Route::get('/', function () {
    return view('home');
  })->name('home');
});

Route::domain('projects.' . env('APP_DOMAIN'))->group(function () {
  Route::get('/', function () {
    return view('projects.home');
  })->name('projects.home');
});
