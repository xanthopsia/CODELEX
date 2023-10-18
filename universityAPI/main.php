<?php

require 'vendor/autoload.php';
require 'UniversityAPI.php';

$api = new UniversityAPI();
$country = readline("Enter country: ");
$universities = $api->getUniversitiesByCountry($country);

if (!$universities) {
    exit("Failed to retrieve data\n");
}

foreach ($universities as $entry) {
    echo "University: {$entry->name}" . PHP_EOL;
    foreach ($entry->domains as $domain) {
        echo "Domain: $domain" . PHP_EOL;
    }
    echo "================\n";
}