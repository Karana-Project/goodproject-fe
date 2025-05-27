<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.cars');
});

Route::get('/wash', function () {
    return view('pages.wash');
});
