@extends('layout')

@section('title')
    Create Job
@endsection

@section('content')
    <h1>Create new job</h1>

    <form action="/jobs" method="POST">
        @csrf
        <input name="title" placeholder="title" type="text">
        <input name="description" placeholder="description" type="text">
        <button type="submit">Submit</button>
    </form>
@endsection
