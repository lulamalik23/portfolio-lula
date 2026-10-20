
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/projects/muslimat', function () {
    return view('projects.muslimat');
});

Route::get('/projects/arvr', function () {
    return view('projects.arvr');
});

Route::get('/projects/video-editor', function () {
    return view('projects.short-video-editor');
});

Route::get('/projects/hand-gesture', function () {
    return view('projects.hand-gesture');
});

