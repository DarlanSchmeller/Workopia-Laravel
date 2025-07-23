<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Workopia | Find and List Jobs' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-header />
    <h1>Layout Component</h1>
    <main class="container mx-auto p-4 mt-4">
        {{ $slot }}
    </main>
</body>
</html>