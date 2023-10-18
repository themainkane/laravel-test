<!DOCTYPE html> <html lang="en"> 
    <head> 
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width,
        initial-scale=1.0"> 
        <title>Movies using Model</title>
    </head> 
        <body> 
            <h1>Here are some Bloody Movies</h1> <ul> 
        
                @foreach ($movies as $movie) 
                <li>{{ $movie->name }}</li>
                <br> 
                type: {{$movie->movieType->name}} 
                <br>
                <br>
                genre: 
                {{ $movie->genres->pluck('name')->implode(', ') }}
                <br>
                <br>
                @endforeach </ul>

        </body>

</html>