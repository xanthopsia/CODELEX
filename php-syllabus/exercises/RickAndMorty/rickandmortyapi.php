<?php
$apiUrl = "https://rickandmortyapi.com/api/episode";

$response = file_get_contents($apiUrl);

if ($response) {
    $data = json_decode($response, true);

    if ($data) {
        //var_dump($data);
        foreach ($data['results'] as $episode) {

            echo "ID: {$episode['id']}\n";
            echo "Name: {$episode['name']}\n";
            echo "Air Date: {$episode['air_date']}\n";
            echo "Episode: {$episode['episode']}\n";
            echo "--------------------------\n";
        }
    } else {
        echo "Unable to retrieve data from the API.\n";
    }
} else {
    echo "Failed to make a request to the API.\n";
}

