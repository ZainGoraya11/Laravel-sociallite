<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '634801750264-hsuc5t67d2anrtfptrkmuepjn1gciu53.apps.googleusercontent.com',
        'client_secret' => 'Ug8FZmlnfQ4T_H7w0W_MLhAl',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '634801750264-hsuc5t67d2anrtfptrkmuepjn1gciu53.apps.googleusercontent.com',
        'client_secret' => 'Ug8FZmlnfQ4T_H7w0W_MLhAl',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

];
