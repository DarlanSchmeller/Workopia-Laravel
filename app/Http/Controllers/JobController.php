<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $title = 'Available Jobs';
        $jobs = [
        'Web Developer',
        'Database Admin',
        'Software Engineer',
        'Systems Analyst'
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create() {
        return view('jobs.create');
    }

    public function show(string $id) {
        return 'Showing job ' . $id;
    }

    public function store(Request $request) {
        $title = $request->input('title');
        $description = $request->input('description');

        return 'Title: ' . $title . ' Description: ' . $description;
    }
}
