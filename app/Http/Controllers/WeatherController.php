<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function weather()
    {
        return view('weatherlocation');
    }
    public function location(Request $request)
    {
        $location = $request->post('location');
        $api_key = '364393651edc94c504c411a63eea11d6';
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q=$location&appid=$api_key");
        $temp = $response->json(['main', 'temp']);
        $pressure = $response->json(['main', 'pressure']);
        $humidity=$response->json(['main', 'humidity']);
        $sea_level=$response->json(['main', 'sea_level']);
        $grnd_level=$response->json(['main', 'grnd_level']);
        $wind_speed=$response->json(['wind', 'speed']);
        if ($temp==null) {
            return '<h5>please enter a vlaid place or check the spelling</h5>';
        }else {
            $temp=$temp-273.15;
            return view('weatherView',[
                'temp'=>$temp,
                'pressure'=>$pressure,
                'humidity'=>$humidity,
                'sea_level'=>$sea_level,
                'grnd_level'=>$grnd_level,
                'wind_speed'=>$wind_speed,
        ]);
        }
    }
}
