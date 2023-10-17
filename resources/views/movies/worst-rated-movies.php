<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worst Rated</title>
</head>

<body>
    <h1>Worst Rated movies of All time</h1>

    <ul>
        <?php foreach ($worst_movies as $movie): ?>
            <li>
                <?= $movie->name ?>
                <?= $movie->rating ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>