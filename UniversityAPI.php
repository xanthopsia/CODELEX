<?php

use GuzzleHttp\Client;

class UniversityAPI
{
    private $client;
    private $baseUrl = 'http://universities.hipolabs.com';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getUniversitiesByCountry($country)
    {
        $endpoint = '/search';
        $url = $this->baseUrl . $endpoint . '?country=' . urlencode($country);

        $response = $this->client->get($url);
        if ($response->getStatusCode() === 200) {
            return json_decode($response->getBody());
        } else {
            return false;
        }
    }

}