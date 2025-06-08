<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function show(WeatherService $weatherService)
    {
        $weather = $weatherService->getSimpleWeather('warszawa', 1);
        return view('weather.show', compact('weather'));
    }
}
