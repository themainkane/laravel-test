<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner options</title>
</head>

<body>
    <h1>Dinner Options</h1>


    <ul>
        <?php foreach ($top_movies as $movie) :?>
        <li>
            <?=$movie->name?> <br>
            <?=$movie->rating?>
            <br><br>
        </li>
        <?php endforeach ;?>
    </ul>
</body>

</html>