<div class="bg-amber-50 rounded-xl shadow p-6 text-gray-800 w-full max-w-md mx-auto mt-12">
    <h3 class="text-xl font-semibold mb-4 flex items-center gap-2">
        🌤 {{ __('messages.weather_widget.title') }}
    </h3>

    @if ($weather)
        <div class="space-y-2 text-sm">
            <p><span class="font-medium text-gray-700">{{ __('messages.weather_widget.city') }}:</span> Legnica</p>
            <p><span class="font-medium text-gray-700">{{ __('messages.weather_widget.date') }}:</span> {{ $weather['date'] }}</p>
            <p><span class="font-medium text-gray-700">{{ __('messages.weather_widget.temperature') }}:</span> {{ $weather['temp_min'] }}°C – {{ $weather['temp_max'] }}°C</p>
            <p><span class="font-medium text-gray-700">{{ __('messages.weather_widget.feels_like') }}:</span> {{ $weather['feels_like_min'] }}°C – {{ $weather['feels_like_max'] }}°C</p>
        </div>
    @else
        <p class="text-sm text-gray-600">{{ __('messages.weather_widget.no_data') }}</p>
    @endif
</div>

