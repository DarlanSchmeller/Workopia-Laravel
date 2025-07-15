<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <form action="/jobs" method="POST">
        @csrf
        <input name="title" placeholder="title" type="text">
        <input name="description" placeholder="description" type="text">
        <button type="submit">Submit</button>
    </form>
</x-layout>
