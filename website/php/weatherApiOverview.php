<?php
    // CTRL + U on page to view source code
    $api_data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=amsterdam&appid=050fa92090b4a55a4ed4686308f7db9e");
    $weather_data = json_decode($api_data, true);
    print_r($weather_data);
    echo $weather_data['coord']['lat'];