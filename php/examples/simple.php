<?php

date_default_timezone_set('UTC');

require_once __DIR__ . '/../../vendor/autoload.php';

use Snagshout\Promote\SdkClient;

$publicId = getenv('PROMOTE_ID');
$secretKey = getenv('PROMOTE_SECRET');
$baseUrl = getenv('PROMOTE_BASE');
$client = new SdkClient(
    $publicId,
    $secretKey,
    $baseUrl
);

var_export($client->getVersion());
