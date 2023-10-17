<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Rated Games</title>
</head>

<body>
    <h1>Top Rated Games</h1>

    <ol>
        <?php foreach ($games as $game): ?>
            <li>
                <?= $game->name ?>
                <?= $game->rating ?>
            </li>

        <?php endforeach; ?>
    </ol>
</body>

</html>