<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worst Rated</title>
</head>

<body>
    @include('components.nav');
    <h1>Worst Rated movies of All time</h1>

    <ol>
        @foreach ($worst_movies as $movie)
      <div class="movie">
            <li class="title"><a href="{{ route('movie.details', ['movie_id' => $movie->id]) }}">{{$movie->name}}</a></li>
                <br>
                <li>
                    type: {{$movie->movieType->name}}
                    <br>
                    genre:
                    {{$movie->genres->pluck('name')->implode(', ')}}
                    <br>
                    <br>
                </li>
      </div>
      @endforeach

    </ol>

</body>

</html>