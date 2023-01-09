<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class GoogleMapsService{

    private $key;

    public function __construct()
    {
        $this->key = config('services.google.key');
    }

    public function reverseGeocoding($lat, $long)
    {
        $latlng = $lat . ',' . $long;
        $url = "https://maps.googleapis.com/maps/api/geocode/json";

        $response = Http::get($url, [
            'latlng' => $latlng,
            'key' => $this->key,
        ]);

        foreach($response['results'] as $result)
        {
            if(!empty($result['formatted_address'])){
                return $result['formatted_address'];
            }
            
        }
    }

}