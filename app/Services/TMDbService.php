<?php

namespace App\Services;

use GuzzleHttp\Client;

class TMDbService
{
    private $client = null;

    //Resquest config params
    private $language = "pt-BR";
    private const API_KEY = "1f54bd990f1cdfb230adb312546d765d";
    private const BASE_URI = "https://api.themoviedb.org/3/";
    private $query = "";

    // Search movies
    // https://api.themoviedb.org/3/search/movie?api_key={api_key}&query=Jack+Reacher

    // Movie details
    // https://api.themoviedb.org/3/movie/343611?api_key={api_key}

    public function __construct()
    {
        $this->configClient();
    }

    private function configClient()
    {
        $this->client = new Client([
            'base_uri' => $this::BASE_URI,
        ]);

    }

    public function searchMovies($query = "Rambo")
    {
        $contents = null;

        try {

            $key = $this::API_KEY;
            $response = $this->client->request('GET', "search/movie?api_key=$key&query=$query", ['verify' => false]);
            $body = $response->getBody();
            $contents = $body->getContents();
            // GuzzleException
        } catch (ClientErrorResponseException $exception) {
            $contents = $exception->getResponse()->getBody(true);
        }

        return $contents;
    }
}
