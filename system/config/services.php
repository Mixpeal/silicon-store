<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'github' => [
        'client_id' => '5ef1b06d9f774e68fc50',
        'client_secret' => '3b50d9ef06bb77e0315dcd016150b38ab6a2f170',
        'redirect' => 'http://localhost/siliconstore/social/login/github',
    ],
    'facebook' => [
        'client_id'     => '1489133364453018',
        'client_secret' => 'bf6830a7eddfd9b6fd67576eb4d94666',
        'redirect'      => 'http://localhost/siliconstore/social/login/facebook',
    ],
    'google' => [
        'client_id' => '821910027336-h31deian6keo272an8oulu1s43k09jnt.apps.googleusercontent.com',
        'client_secret' => 'FRz_KRtd2UJUbHyG8EN6lzSE',
        'redirect' => 'http://localhost/siliconstore/social/login/google',
    ],
    'linkedin' => [
        'client_id' => '780qloxv95l2fp',
        'client_secret' => 'Jb4J4ybco6ylXVGH',
        'redirect' => 'http://localhost/siliconstore/social/login/linkedin'
    ],
    'twitter' => [
        'client_id' => '6iwHtjBiVK3Wi4qG9uIjRbA3P',
        'client_secret' => 'm9J7PtDvguw91ka7KTFFdjBBoGpH1NiPIuGh6o7aAtjdLUS6K6',
        'redirect' => 'http://localhost/siliconstore/social/login/twitter',
    ],
    'paypal' => [
        'client_id' => 'paypal_client_id',
        'secret' => 'paypal_secret'
    ],
];
