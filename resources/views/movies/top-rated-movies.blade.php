<!DOCTYPE html> <html lang="en"> 
    <head> 
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width,
        initial-scale=1.0"> 
        <title>Movies using Model</title>
    </head> 
        <body> 
            @include('components.nav');
            <h1>Top rated movies of all time</h1> <ul> 
        
                @foreach ($top_movies as $movie) 
                <li><a href="{{ route('movie.details', ['movie_id' => $movie->id]) }}">
                    {{ $movie->name }}</a>
                
                <br> 
                type: {{$movie->movieType->name}} 
                <br>
                <br>
                genre: 
                {{ $movie->genres->pluck('name')->implode(', ') }}
                <br>
                <br>
                </li>
                @endforeach </ul>

        </body>

</html>