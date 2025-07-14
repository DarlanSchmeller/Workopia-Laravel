<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
        @forelse($jobs as $job)
            <li>
                {{ $job }}
            </li>
        @empty
            <li>No job listings found</li>
        @endforelse
    </ul>
</body>
</html>