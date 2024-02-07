<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function index()
    {
        //getting images from  pixels API
        $client = new Client();
        $url = 'https://api.pexels.com/v1/curated?page=2&per_page=30';

        $headers = [
            'Authorization' => 'olTFl4bNnvIwSKrIxObZQa1oh4GUl8HOI0218E1YeLe6hRIzf5laVs00'
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $images = json_decode($response->getBody());
        $collection = Collection::make($images->photos);
        $newCollection = $collection->map(function($url,$title){
            return [
                "url"=> $url->src->original,
                "title" => $url->alt,
            ];
        });

        //$newCollection = $newCollection->toJson();
        return view('posts.index', ['images' =>  $newCollection]);
    }
}
