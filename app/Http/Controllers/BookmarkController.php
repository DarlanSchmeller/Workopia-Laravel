<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    // @desc    Get all users bookmarks
    // @route   GET /bookmarks
    public function index(): View
    {
        // Get the user
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Get the bookmarks
        $bookmarks = $user->bookmarkedJobs()->orderBy('job_user_bookmarks.created_at', 'desc')->paginate(9);

        return view('jobs.bookmarked')->with('bookmarks', $bookmarks);
    }

    // @desc    Create new bookmarked job
    // @route   POST /bookmarks/{job}
    public function store(Job $job): RedirectResponse
    {
        // Get the user
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Check if the job is already bookmarked
        if($user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is already bookmarked');
        }

        // Create new bookmark
        $user->bookmarkedJobs()->attach($job->id);

        return back()->with('success', 'Job bookmarked successfully!');
    }

    // @desc    Delete bookmarked job
    // @route   DELETE /bookmarks/{job}
    public function destroy(Job $job): RedirectResponse
    {
        // Get the user
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Check if the job is already bookmarked
        if(!$user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is not bookmarked');
        }

        // Remove bookmark
        $user->bookmarkedJobs()->detach($job->id);

        return back()->with('success', 'Bookmark removed successfully!');
    }
}
