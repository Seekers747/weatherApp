<?php
    // need to put try and catch exceptions
    $api_data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=". $_GET['city'] ."&appid=050fa92090b4a55a4ed4686308f7db9e");
    $weather_data = json_decode($api_data, true);

    // Coordinates
    $longitude = $weather_data['coord']['lon'] ?? null;
    $latitude = $weather_data['coord']['lat'] ?? null;
    
    // Weather
    $weather_id = $weather_data['weather'][0]['id'] ?? null;
    $weather_main = $weather_data['weather'][0]['main'] ?? null;
    $weather_description = $weather_data['weather'][0]['description'] ?? null;
    $weather_icon = $weather_data['weather'][0]['icon'] ?? null;
    
    // Base
    $base = $weather_data['base'] ?? null;
    
    // Main weather data
    $temp = $weather_data['main']['temp'] ?? null;
    $feels_like = $weather_data['main']['feels_like'] ?? null;
    $temp_min = $weather_data['main']['temp_min'] ?? null;
    $temp_max = $weather_data['main']['temp_max'] ?? null;
    $pressure = $weather_data['main']['pressure'] ?? null;
    $humidity = $weather_data['main']['humidity'] ?? null;
    $sea_level = $weather_data['main']['sea_level'] ?? null;
    $grnd_level = $weather_data['main']['grnd_level'] ?? null;
    
    // Visibility
    $visibility = $weather_data['visibility'] ?? null;
    
    // Wind data
    $wind_speed = $weather_data['wind']['speed'] ?? null;
    $wind_deg = $weather_data['wind']['deg'] ?? null;
    $wind_gust = $weather_data['wind']['gust'] ?? null;
    
    // Clouds data
    $clouds_all = $weather_data['clouds']['all'] ?? null;
    
    // Timestamp
    $dt = $weather_data['dt'] ?? null;
    
    // System data
    $sys_type = $weather_data['sys']['type'] ?? null;
    $sys_id = $weather_data['sys']['id'] ?? null;
    $sys_country = $weather_data['sys']['country'] ?? null;
    $sys_sunrise = $weather_data['sys']['sunrise'] ?? null;
    $sys_sunset = $weather_data['sys']['sunset'] ?? null;
    
    // Timezone
    $timezone = $weather_data['timezone'] ?? null;
    
    // City info
    $id = $weather_data['id'] ?? null;
    $name = $weather_data['name'] ?? null;
    
    // Response code
    $cod = $weather_data['cod'] ?? null;

    echo "<h1>Weather in ". $name ."</h1>";
    echo "<p>Coordinates: ". $latitude .", ". $longitude ."</p>";
    echo "<p>Weather: ". $weather_main ."</p>";
    echo "<p>Description: ". $weather_description ."</p>";
    echo "<p>Temperature: ". $temp ."</p>";
    echo "<p>Feels like: ". $feels_like ."</p>";
    echo "<p>Min temperature: ". $temp_min ."</p>";
    echo "<p>Max temperature: ". $temp_max ."</p>";
    echo "<p>Pressure: ". $pressure ."</p>";
?>