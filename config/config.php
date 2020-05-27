<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Shipstation Settings
     |--------------------------------------------------------------------------
     |
     | Shipstation Requires an api key and secret for authentication.
     | You can provide the api_key and api_secret by adding SHIPSTATION_API_KEY
     | and SHIPSTATION_API_SECRET to your .env fle
     |
     */

    'api_key' => env('SHIPSTATION_API_KEY'),
    'api_secret' => env('SHIPSTATION_API_SECRET')
];
