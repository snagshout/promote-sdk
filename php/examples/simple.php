<?php

date_default_timezone_set('UTC');

require_once __DIR__ . '/../../vendor/autoload.php';

use SellerLabs\Promote\Client;

$client = new Client(
    "b7b8c99469b430c3f4c8132527c7fab6c5963416db63425ca4dd7df2f09ce1bb7ca9581463f4844c733a073434ab419cee9d63f44435bea65c0799b083a9bddf",
    "5586129456363a0741e36fecc50ccaa571007ff461b468c01608d02e8add11fc2dc1ac6e8629ee839993965e2ff95d8f015ebd3507a45605dd67b085f44bbd55"
);

var_export($client->deals()->indexDeals());
