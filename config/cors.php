
<?php
return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'], // You can specify methods like ['GET', 'POST']

    'allowed_origins' => ['https://laravel-api-master-6ik5ik.laravel.cloud'], // Replace '*' with specific domains in production

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Replace '*' with specific headers if needed

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
