<?php

namespace App\View\Components;

use App\Services\WeatherService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WeatherWidget extends Component
{
    /**
     * Create a new component instance.
     */
    public $weather;
    public function __construct(WeatherService $weatherService)
    {
        $this->weather = $weatherService->getSimpleWeather('warszawa', 1);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.weather-widget');
    }
}
