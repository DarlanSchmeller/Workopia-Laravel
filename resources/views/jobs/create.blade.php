<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Job Listing</title>
</head>
<body>
    <h1>Create new job</h1>

    <form action="/jobs" method="POST">
        @csrf
        <input name="title" placeholder="title" type="text">
        <input name="description" placeholder="description" type="text">
        <button type="submit">Submit</button>
    </form>
</body>
</html>