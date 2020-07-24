<?php

namespace App\Common\Infrastructure\Elasticsearch;

interface ESManagementOperationsInterface
{
    public function create($params): array;

    public function delete($params): array;
}