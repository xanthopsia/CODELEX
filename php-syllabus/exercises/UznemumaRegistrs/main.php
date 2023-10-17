<?php

function retrieveDataFromApi($url)
{
    $response = file_get_contents($url);

    if ($response === false) {
        exit("Failed to fetch data from the API.\n");
    }

    $data = json_decode($response);

    if ($data === null || !$data->success) {
        exit("API request was not successful or an error occurred.\n");
    }

    return $data;
}

echo "Enter search term (company name / register number): ";
$q = trim(readline());

if (empty($q)) {
    exit("Search term cannot be empty.\n");
}

$baseUrl = "https://data.gov.lv/dati/lv/api/3/action/datastore_search";
$queryParams = [
    'q' => $q,
    'resource_id' => '25e80bf3-f107-4ab4-89ef-251b5b9374e9',
];

$url = $baseUrl . '?' . http_build_query($queryParams);

$data = retrieveDataFromApi($url);

if (!isset($data->result->records) || empty($data->result->records)) {
    exit("No records found.\n");
}

foreach ($data->result->records as $record) {
    echo "Name: " . $record->name . PHP_EOL;
    echo "SEPA: " . $record->sepa . PHP_EOL;
    echo "Address: " . $record->address . PHP_EOL;
    echo PHP_EOL;
}
