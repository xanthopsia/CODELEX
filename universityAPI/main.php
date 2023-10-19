<?php

require 'vendor/autoload.php';
require 'UniversityAPI.php';
require 'University.php';
require 'UniversityCollection.php';

$api = new UniversityAPI();
$country = readline("Enter country: ");
$universitiesData = $api->getUniversitiesByCountry($country);

if (!$universitiesData) {
    exit("Failed to retrieve data\n");
}

$universityCollection = new UniversityCollection();

foreach ($universitiesData as $entry) {
    $university = new University($entry->name, $entry->domains);
    $universityCollection->addUniversity($university);
}

$universities = $universityCollection->getUniversities();

foreach ($universities as $university) {
    echo "University: {$university->name}" . PHP_EOL;
    foreach ($university->domains as $domain) {
        echo "Domain: $domain" . PHP_EOL;
    }
    echo "================\n";
}