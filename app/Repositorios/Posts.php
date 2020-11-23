<?php

namespace App\Repositorios;
use GuzzleHttp\Client;
use App\Repositorios\GuzzleHttpRequest;
/**
 * posts	100 posts
 * comments	500 comments
 * albums	100 albums
 * photos	5000 photos
 * todos	200 todos
 * users	10 users
 */

class Posts extends GuzzleHttpRequest {

    

    public function all(){
        return $this->getUrl('posts');
      
    }


    public function find($id){
        return $this->getUrl("posts/{$id}");
    }

  
}