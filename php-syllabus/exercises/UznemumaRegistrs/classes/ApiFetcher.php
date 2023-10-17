<?php
class ApiFetcher {
    private $baseUrl;

    public function __construct($baseUrl) {
        $this->baseUrl = $baseUrl;
    }

    public function retrieveDataFromApi($q) {
        $url = $this->baseUrl . '?' . http_build_query(['q' => $q]);

        $response = file_get_contents($url);

        if ($response === false) {
            throw new Exception("Failed to fetch data from the API.");
        }

        $data = json_decode($response);

        if ($data === null || !$data->success) {
            throw new Exception("API request was not successful or an error occurred.");
        }

        return $data->result->records;
    }
}

