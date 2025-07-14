<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $jobs = [
       'Web Developer',
       'Database Admin',
       'Software Engineer',
       'Systems Analyst'
    ];

    return view('jobs.index', compact('jobs'));
})->name('jobs');

Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs.create');

Route::get('/posts/{id}', function (string $id) {
    return 'Post ' . $id;
})->whereNumber('id');

Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
    return 'Post ' . $id . $commentId;
});

Route::get('/test', function(Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header()
    ];
});

Route::get('/download', function() {
    return response()->json(['name' => 'john doe'])->cookie('name', 'John doe');
});

Route::get('/read-cookie', function(Request $request) {
    $cookieValue = $request->cookie('name');
    return response()->json(['cookie' => $cookieValue]);
});