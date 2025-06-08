<?php
namespace App\Services;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Cache;

class WeatherService
{
    private $apiKey;
    private $client;

    public function __construct()
    {
        // Get an API key from .env file
        $this->apiKey = env('WEATHER_API_KEY');
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
                        'token' => $this->apiKey
                    ]
                ]);

                $data = json_decode($response->getBody(), true);
                return [
                    'date' => $data['date'] ?? null,
                    'sunrise' => $data['sunrise'] ?? null,
                    'sunset' => $data['sunset'] ?? null,
                    'temp_max' => $data['day']['temp_max'] ?? null,
                    'temp_min' => $data['day']['temp_min'] ?? null,
                    'feels_like_max' => $data['day']['temp_felt_max'] ?? null,
                    'feels_like_min' => $data['day']['temp_felt_min'] ?? null,
                    'precipitation' => $data['day']['precipitation'] ?? null,
                    'wind' => $data['day']['wind_velocity'] ?? null,
                    'wind_direction' => $data['day']['wind_direction'] ?? null,
                    'humidity' => $data['day']['humidity'] ?? null,
                    'pressure' => $data['day']['pressure'] ?? null,
                ];
            } catch (RequestException $e) {
                \Log::error('Weather API error: ' . $e->getMessage());
                throw new \Exception('Could not fetch weather data.');
            }
        });
    }
}
