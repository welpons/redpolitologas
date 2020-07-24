<?php


namespace App\Common\Infrastructure\Elasticsearch;


class ESManagementOperations extends ESClientimplements implements ESManagementOperationsInterface
{
    public function create($params): array
    {
        return $this->client->indices()->create($params);
    }

    public function delete($params): array
    {
        return $this->client->indices()->delete($params);;
    }
}