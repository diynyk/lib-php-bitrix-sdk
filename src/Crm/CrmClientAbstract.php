<?php

namespace Diynyk\Bitrix\Crm;


use Diynyk\Bitrix\Crm\Entities\EntityAbstract;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

/**
 * Class ClientAbstract
 * @package Diynyk\Bitrix\Crm
 */
abstract class CrmClientAbstract
{
    const ENTITY_CLASS = '';

    /**
     * @param string $entity
     * @param array $query
     * @return array
     */
    private function makeGet(string $entity, array $query = []): array
    {
        return $this->makeRequest('GET', $entity, $query, []);
    }

    /**
     * @param string $entity
     * @param array $query
     * @param array $body
     * @return array
     */
    private function makePost(string $entity, array $query = [], array $body = []): array
    {
        return $this->makeRequest('POST', $entity, $query, $body);
    }

    /**
     * @param string $method
     * @param string $entity
     * @param array $query
     * @param array $body
     * @return array
     */
    protected function makeRequest(string $method, string $entity, array $query = [], array $body = []): array
    {
        $options = [
            'method' => $method
        ];

        if (!empty($query)) {
            $options['query'] = $query;
        }

        if (!empty($body)) {
            $options['body'] = $body;
        }

        return $this->parseResponse(
            (new BitrixRestRequestHelper($this->credentials, $this->getBitrixMethodName($entity), $options))
                ->execute()
        );
    }

    /**
     * @var BitrixConnectionCredentials
     */
    protected BitrixConnectionCredentials $credentials;

    /**
     * ClientAbstract constructor.
     * @param BitrixConnectionCredentials $credentials
     */
    public function __construct(BitrixConnectionCredentials $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @param string $action
     * @return string
     */
    private function getBitrixMethodName(string $action): string
    {
        return (static::ENTITY_CLASS)::getBitrixMethodName($action);
    }

    /**
     * @param string $rawResponse
     * @return array
     */
    private function parseResponse(string $rawResponse): array
    {
        return json_decode($rawResponse, true);
    }

    private function normaliseIntList(array $list): array
    {
        return array_map(
            function ($i) {
                return (int)$i;
            },
            $list
        );
    }

    /**
     * @param int $page
     * @param array $fields
     * @return array
     */
    public function index($page = 0, array $fields = []): array
    {
        $data = $this->makeGet(
            'list',
            [
                'start' => $page,
                'FILTER' => $fields,
                'SELECT' => [
                    'ID'
                ],
            ]
        );

        $items = array_column($data['result'], 'ID');

        if (isset($data['next'])) {
            $items = array_merge($items, $this->index((int)$data['next'], $fields));
        }

        return $this->normaliseIntList($items);
    }

    /**
     * @param EntityAbstract $entity
     * @return EntityAbstract
     * @throws \Exception
     */
    public function add(EntityAbstract $entity): EntityAbstract
    {
        $data = $this->makePost(
            'add',
            [],
            [
                'fields' => $entity->toArray(),
            ]
        );

        if (isset($data['result'])) {
            return $this->get($data['result']);
        }
        throw new \Exception('fuck');
    }

    /**
     * @param int $id
     * @return EntityAbstract
     * @throws \Exception
     */
    public function get(int $id): EntityAbstract
    {
        $data = $this->makeGet(
            'get',
            [
                'ID' => $id,
            ]
        );

        if (isset($data['result'])) {
            return $this->convertArrayToObject($data);
        }
        throw new \Exception('fuck');
    }

    protected function getEntityDtoClassName(): string
    {
        return static::ENTITY_CLASS;
    }


    protected function convertArrayToObject(array $data = ['result' => []]): EntityAbstract
    {
        $className = $this->getEntityDtoClassName();
        return new $className(
            $this->credentials,
            $data['result']
        );
    }

    /**
     * @param EntityAbstract $entity
     * @return EntityAbstract
     * @throws \Exception
     */
    public function update(EntityAbstract $entity): EntityAbstract
    {
        $data = $this->makePost(
            'update',
            [
                'ID' => $entity->ID,
            ],
            [
                'fields' => $entity->toArray(),
            ]
        );

        if (isset($data['result']) && $data['result']) {
            return $this->get($entity->ID);
        }
        throw new \Exception('fuck');
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $data = $this->makeGet(
            'delete',
            [
                'ID' => $id,
            ]
        );

        return $data['result'];
    }
}