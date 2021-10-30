<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Weather App</title>
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div class="main">
            <div class="rain"></div>
            <div class="lightining"></div>
            <div style="justify-self: center" class="info">
                <ul>
                    <h1 class="header">Today Weather Informations</h1>
                    <li class="list"><h2 class="data">Location : {{$location}}</h2></li>
                    <li class="list"><h2 class="data">Temperature : {{$temp}}°C</h2></li>
                    <li class="list"><h2 class="data">Pressure : {{$pressure}}</h2></li>
                    <li class="list"><h2 class="data">Humidity : {{$humidity}}%</h2></li>
                    <li class="list"><h2 class="data">Sea Level : {{$sea_level}}</h2></li>
                    <li class="list"><h2 class="data">Ground Level : {{$grnd_level}}</h2></li>
                    <li class="list"><h2 class="data">Wind Speed : {{$wind_speed}} km/h</h2></li>
                </ul>
            </div>
        </div>
    </body>
</html>
