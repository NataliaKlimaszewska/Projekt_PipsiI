<div class="weather-widget">
    <h3>🌤 Pogoda</h3>
    @if ($weather)
        <p>Miasto: Legnica</p>
        <p><strong>Data:</strong> {{ $weather['date'] }}</p>
        <p><strong>Temperatura:</strong> {{ $weather['temp_min'] }}°C – {{ $weather['temp_max'] }}°C</p>
        <p><strong>Odczuwalna:</strong> {{ $weather['feels_like_min'] }}°C – {{ $weather['feels_like_max'] }}°C</p>
        <p><strong>Wiatr:</strong> {{ $weather['wind'] }} km/h, kierunek: {{ $weather['wind_direction'] }}</p>
        <p><strong>Ciśnienie:</strong> {{ $weather['pressure'] }} hPa</p>
        <p><strong>Wilgotność:</strong> {{ $weather['humidity'] }}%</p>
        <p><strong>Opady:</strong> {{ $weather['precipitation'] }} mm</p>
    @else
        <p>Brak danych pogodowych.</p>
    @endif
</div>
