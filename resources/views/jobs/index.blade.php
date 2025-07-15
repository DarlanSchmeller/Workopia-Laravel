<x-layout>
    <h1>Available Jobs</h1>
    <ul>
        @forelse($jobs as $job)
            <li>
                {{ $job }}
            </li>
        @empty
            <li>No job listings found</li>
        @endforelse
    </ul>
</x-layout>
