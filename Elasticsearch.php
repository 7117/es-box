<?php
require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$host = ['127.0.0.1:9200'];
$client = ClientBuilder::create()->setHosts($host)->build();

$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
    'body' => ['testField' => 'abc']
];

$response = $client->index($params);
print_r($response);