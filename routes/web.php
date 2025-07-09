<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('welcome') . '<h1>Available Jobs</h1>';
})->name('jobs');

Route::get('/posts/{id}', function (string $id) {
    return 'Post ' . $id;
})->whereNumber('id');

Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
    return 'Post ' . $id . $commentId;
});
