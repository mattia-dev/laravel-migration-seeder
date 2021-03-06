<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600,800" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Trip Agency | {{ $trip->label }}</title>
</head>
<body>
    <div class="container trip-page">
        @include('templates/navbar')
    
        <h1>{{ $trip->label }}</h1>
        <img src="{{ $trip->thumb }}" alt="{{ $trip->destination }} image">
        <div>{{ $trip->description }}</div>

        <a href="http://127.0.0.1:8000/trip/{id}/book"><button>BOOK NOW</button></a>
    </div>
</body>
</html>