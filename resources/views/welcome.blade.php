<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600,800" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Trip Agency | Home</title>
</head>
<body>
    <div class="container">
        <h1>EXPLORE ALL TRIPS</h1>

        @include('templates/navbar')

        <ul>
            @foreach($allTrips as $trip)
                <li class="card">
                    <a href="http://127.0.0.1:8000/trip/{{ $trip->id }}">
                        <h2>{{ $trip->label }}</h3>
                        
                        <img src="{{ $trip->thumb }}" alt="{{ $trip->destination }} image">
                        
                        <div>
                            <span class="destination">{{ $trip->destination }}</span><span> - Transport: {{ $trip->transport }}</span>
                        </div>
                        
                        <div class="price-info">
                            <span>Price for {{ $trip->nights }} nights: {{ $trip->price }}$</span>
                            
                            @if($trip->discount > 0)
                            <span> - Discount: <span class="discount">-{{$trip->discount}}%</span></span>
                            @endif

                            @if($trip->free_cancellation)
                            <span> - <span class="cancellation">FREE CANCELLATION</span></span>
                            @endif
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>