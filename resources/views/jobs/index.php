<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>
<body>
    <h1>Available Jobs</h1>

    <ul>
        <?php foreach($jobs as $job) : ?>
            <li><?php echo htmlspecialchars($job, ENT_QUOTES, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>