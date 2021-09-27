<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function weather()
    {
        $location='Kerala';
        $api_key='364393651edc94c504c411a63eea11d6';
        $response=Http::get("http://api.openweathermap.org/data/2.5/weather?q=$location&appid=$api_key");
        //dump($response->json());
        //dump($response->json(['main','temp']));
        $temp=$response->json(['main','temp'])-273.15;
        //echo $temp;
        return view('weatherView');
    }
}
