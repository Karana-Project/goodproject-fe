<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.cars');
});

Route::get('/carCollections', function () {
    return view('pages.carsDetail.collections');
});

Route::get('/carDetail', function () {
    return view('pages.carsDetail.carDetail');
});

Route::get('/wash', function () {
    return view('pages.wash');
});

Route::get('/media', function () {
    return view('pages.media');
});
