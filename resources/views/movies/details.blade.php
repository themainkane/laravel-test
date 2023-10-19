<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detials</title>
</head>

<body>
    @include('components.nav');

    <h1>Spotlight:
        <?= $movie->name; ?>
    </h1>
    <h3>Rating:
        <?= $movie->rating; ?>
    </h3>
    <h3>Run time: 
    <?= $movie->length; ?>
    </h3>
    <h2>Cast and crew</h2>

</body>

</html>