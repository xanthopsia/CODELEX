<?php

$city = readline('Enter city: ');
$apiKey = 'API KEY HERE';

$weatherData = fetchWeatherData($city, $apiKey);
displayWeatherInfo($weatherData);

function fetchWeatherData(string $city, string $apiKey) {
    $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";
    $response = file_get_contents($apiUrl);

    return $response ? json_decode($response, true) : null;
}

function displayWeatherInfo($data) {
    if (!$data) {
        echo "City not found or API request failed.\n";
        return;
    }

    $weatherDescription = $data['weather'][0]['description'];
    $temperature = $data['main']['temp'] - 273.15; // K to C
    $humidity = $data['main']['humidity'];

    echo "Weather in {$data['name']}:\n";
    echo "Description: $weatherDescription\n";
    echo "Temperature: $temperature °C\n";
    echo "Humidity: $humidity%\n";
}
