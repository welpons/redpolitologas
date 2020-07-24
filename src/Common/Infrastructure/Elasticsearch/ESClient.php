<?php

namespace App\Common\Infrastructure\Elasticsearch;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;

abstract class ESClient
{
    protected Client $client;

    public function __construct(array $hosts = [])
    {
        $this->client = ClientBuilder::create()
        ->setHosts($hosts)
        ->build();
    }




}