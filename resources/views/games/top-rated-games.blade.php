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
        @foreach ($top_games as $game)
        <li class="game"><a href="{{ route('movie.details', ['movie_id' => $game->id]) }}">{{$game->name}}</a>
            <br>
            type: {{$game->movieType->name}} 

            <br>
            <br>
            </li>
        </li>
            
        @endforeach 
    </ol>
</body>

</html>