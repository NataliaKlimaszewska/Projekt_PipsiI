<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Cache;

class WeatherService
{
    private $apiKey;
    private $client;

    public function __construct()
    {
        // Get API key from .env file
        $this->apiKey = env('fbafe7f47f513633acd7');
        $this->client = new Client([
            'base_uri' => 'https://dobrapogoda24.pl/api/v1/weather/'
        ]);
    }

    /**
     * Fetch current weather for a city
     */
    public function getSimpleWeather(string $city, int $day = 1)
    {
        $cacheKey = "weather_simple_{$city}_{$day}";

        return Cache::remember($cacheKey, now()->addMinutes(30), function () use ($city, $day) {
            try {
                $response = $this->client->get('simple', [
                    'query' => [
                        'city' => $city,
                        'day' => $day,
                        'token' => $this->token
                    ]
                ]);

                return json_decode($response->getBody(), true);
            } catch (RequestException $e) {
                \Log::error('Weather API error: ' . $e->getMessage());
                throw new \Exception('Could not fetch weather data.');
            }
        });
    }
}

class WeatherController extends Controller
{
    public function show(WeatherService $weatherService)
    {
        $weather = $weatherService->getSimpleWeather('warszawa', 1);
        return view('weather.show', compact('weather'));
    }
}
