<?php
require 'classes/ApiFetcher.php';
require 'classes/ResultDisplay.php';

echo "Enter search term (company name / register number): ";
$q = trim(readline());

if (empty($q)) {
    exit("Search term cannot be empty.\n");
}

$baseUrl = "https://data.gov.lv/dati/lv/api/3/action/datastore_search";

try {
    $apiFetcher = new ApiFetcher($baseUrl);
    $records = $apiFetcher->retrieveDataFromApi($q);

    if (empty($records)) {
        exit("No records found.\n");
    }

    $resultDisplay = new ResultDisplay();
    $resultDisplay->displayRecords($records);
} catch (Exception $e) {
    exit($e->getMessage() . "\n");
}
