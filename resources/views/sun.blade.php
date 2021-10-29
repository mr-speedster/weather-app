<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Weather app</title>
        <link rel="stylesheet" href="/css/sun.css" />
    </head>
    <body>
        <div>
            <div class="sun"></div>
            <img src="/assets/img/just.png" alt="" />
            <!--<div class="moon"></div>-->
            <div class="cloud">
                <img
                    class="cloud1"
                    src="/assets/img/cloud1.png"
                    alt=""
                />
                <img
                    class="cloud2"
                    src="/assets/img/cloud2.png"
                    alt=""
                />
                <img
                    class="cloud3"
                    src="/assets/img/cloud3.png"
                    alt=""
                />
            </div>
        </div>
        <div style="justify-self: center" class="info">
            <ul>
                <h1 class="header">Today Weather Informations</h1>
                <li class="list"><h2 class="data">Location : {{$location}}</h2></li>
                <li class="list"><h2 class="data">Temperature : {{$temp}}°C</h2></li>
                <li class="list"><h2 class="data">Pressure : {{$pressure}}</h2></li>
                <li class="list"><h2 class="data">Humidity : {{$humidity}}%</h2></li>
                <li class="list"><h2 class="data">Sea Level : {{$sea_level}}</h2></li>
                <li class="list"><h2 class="data">Ground Level : {{$grnd_level}}</h2></li>
                <li class="list"><h2 class="data">Wind Speed : {{$wind_speed}}km/h</h2></li>
            </ul> 
        </div>
    </body>
</html>
