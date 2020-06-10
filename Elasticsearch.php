<?php
require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

class Elasticsearch extends ClientBuilder
{

}

$client = Elasticsearch::create()->build();
