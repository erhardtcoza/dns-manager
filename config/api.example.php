<?php

/*
|--------------------------------------------------------------------------
| API Configuration
|--------------------------------------------------------------------------
|
| Ensure that the provided API token and client ID have the necessary permissions.
|
|--------------------------------------------------------------------------
*/

return [

    /*
    |--------------------------------------------------------------------------
    | API Token
    |--------------------------------------------------------------------------
    |
    | The API token for authentication. Make sure the token contains the
    | necessary permissions for the application to function properly.
    |
    */
    'token' => '2e2f26a3e0612088dca8acd489919e9dcdd12',

    /*
    |--------------------------------------------------------------------------
    | API Client ID
    |--------------------------------------------------------------------------
    |
    | The API client ID for authentication. Ensure that the client has admin
    | permissions over every account and zone to avoid conflicts.
    |
    */
    'client_id' => 'erhardt@vinet.co.za',

    /*
    |--------------------------------------------------------------------------
    | API URL
    |--------------------------------------------------------------------------
    |
    | The URL to the API. It specifies the base URL for making API requests.
    |
    */
    'url' => 'https://api.cloudflare.com/client/v4',

    /*
    |--------------------------------------------------------------------------
    | Root CNAME Target
    |--------------------------------------------------------------------------
    |
    | The default CNAME target for the root domain. Specify the CNAME target
    | that should be used as the default for the root domain.
    |
    */
    'root_cname_target' => '',

    /*
    |--------------------------------------------------------------------------
    | Sub-CNAME Target
    |--------------------------------------------------------------------------
    |
    | The default CNAME target for subdomains. Specify the CNAME target that
    | should be used as the default for subdomains.
    |
    */
    'sub_cname_target' => '',

];
