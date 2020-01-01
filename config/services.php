<?php

return [

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

    'facebook' => [
        'client_id' => '2621924897929094',
        'client_secret' => 'daf9131adc0d436b738d08c2cb02181b',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '119976995801-5svvgm09q4u3lgljfm6tcm02boan5t5g.apps.googleusercontent.com',
        'client_secret' => 'kFTQSrYN6mkmo1tq-6EVscQw',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
	
	'github' => [
        'client_id' => 'f8b979205b6aa828a9e3',
        'client_secret' => 'b302493c3d33bc7328fcbf738f3fdead03cd1c33',
        'redirect' => 'http://127.0.0.1:8000/login/github/callback',
    ],

];
