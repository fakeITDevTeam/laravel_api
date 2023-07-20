<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// if u just want to route to a view-only
//Route::view('/', 'home');
