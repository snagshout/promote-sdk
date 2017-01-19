<?php
date_default_timezone_set('UTC');
require_once __DIR__ . '/../../vendor/autoload.php';
use SellerLabs\Promote\Client;
$client = new Client(
    "PUBLIC_ID",
    "PRIVATE_KEY"
);
var_export(
    $client
        ->front()
        ->getVersion()
);
