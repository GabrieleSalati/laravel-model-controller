<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <h1>MOVIES</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <h5>{{ $movie['original-title'] }}</h5>
                            <p class="card-text">{{ $movie['nationality'] }} - {{ $movie['date'] }}</p>
                            <h5>{{ $movie['vote'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
