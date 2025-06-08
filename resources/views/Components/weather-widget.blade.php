<div class="weather-widget">
    <h3>🌤 {{ __('messages.weather_widget.title') }}</h3>
    @if ($weather)
        <p>{{ __('messages.weather_widget.city') }} Legnica</p>
        <p><strong>{{ __('messages.weather_widget.date') }}</strong> {{ $weather['date'] }}</p>
        <p><strong>{{ __('messages.weather_widget.temperature') }}</strong> {{ $weather['temp_min'] }}°C – {{ $weather['temp_max'] }}°C</p>
        <p><strong>{{ __('messages.weather_widget.feels_like') }}</strong> {{ $weather['feels_like_min'] }}°C – {{ $weather['feels_like_max'] }}°C</p>
{{--
    <p><strong>{{ __('messages.weather_widget.wind') }}</strong> {{ $weather['wind'] }} km/h, {{ __('messages.weather_widget.wind_direction') }} {{ $weather['wind_direction'] }}</p>
    <p><strong>{{ __('messages.weather_widget.pressure') }}</strong> {{ $weather['pressure'] }} hPa</p>
    <p><strong>{{ __('messages.weather_widget.humidity') }}</strong> {{ $weather['humidity'] }}%</p>
    <p><strong>{{ __('messages.weather_widget.precipitation') }}</strong> {{ $weather['precipitation'] }} mm</p> --}}
@else
    <p>{{ __('messages.weather_widget.no_data') }}</p>
@endif
</div>
