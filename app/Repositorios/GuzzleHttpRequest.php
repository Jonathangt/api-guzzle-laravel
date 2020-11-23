<?php

namespace App\Repositorios;

use GuzzleHttp\Client; 

//clase decicada a interactuar con Guzzle
class GuzzleHttpRequest{

    protected $client;

    public function __construct(Client $client){
        $this->client = $client;
           
    }

    protected function getUrl($url){
        $response = $this->client->request('GET', $url); //https://jsonplaceholder.typicode.com/posts
    
        // dd($response->getBody()->getContents());    
 
         return json_decode( $response->getBody()->getContents());
    }
}