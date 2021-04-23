<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\EntityAbstract;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

abstract class ClientAbstract
{
    const ENTITY_CLASS = '';

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

    /**
     * @param int $page
     * @return array
     */
    public function index($page = 0): array
    {
        $response = (new BitrixRestRequestHelper(
            $this->credentials,
            $this->getBitrixMethodName('list'),
            [
                'method' => 'GET',
                'query' => [
                    'select[]' => 'ID',
                    'start' => $page
                ]
            ]
        ))->execute();

        $data = $this->parseResponse($response);
        $items = array_column($data['result'], 'ID');

        if (isset($data['next'])) {
            $items = array_merge($items, $this->index((int)$data['next']));
        }

        return array_map(
            function ($i) {
                return (int)$i;
            },
            $items
        );
    }

    /**
     * @param EntityAbstract $entity
     * @return EntityAbstract
     * @throws \Exception
     */
    public function add(EntityAbstract $entity): EntityAbstract
    {
        $response = (new BitrixRestRequestHelper(
            $this->credentials,
            $this->getBitrixMethodName('add'),
            [
                'method' => 'POST',
                'body' => [
                    'fields' => $entity->toArray(),
                ]
            ]
        ))->execute();

        $data = $this->parseResponse($response);

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
        $response = (new BitrixRestRequestHelper(
            $this->credentials,
            $this->getBitrixMethodName('get'),
            [
                'method' => 'GET',
                'query' => [
                    'ID' => $id,
                ]
            ]
        ))->execute();

        $data = $this->parseResponse($response);

        if (isset($data['result'])) {
            $className = static::ENTITY_CLASS;
            return new $className(
                $this->credentials,
                $data['result']
            );
        }
        throw new \Exception('fuck');
    }

    /**
     * @param EntityAbstract $entity
     * @return EntityAbstract
     * @throws \Exception
     */
    public function update(EntityAbstract $entity): EntityAbstract
    {
        $response = (new BitrixRestRequestHelper(
            $this->credentials,
            $this->getBitrixMethodName('update'),
            [
                'method' => 'POST',
                'query' => [
                    'ID' => $entity->ID,
                ],
                'body' => [
                    'fields' => $entity->toArray(),
                ]
            ]
        ))->execute();

        $data = $this->parseResponse($response);

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
        $response = (new BitrixRestRequestHelper(
            $this->credentials,

            $this->getBitrixMethodName('delete'),
            [
                'method' => 'GET',
                'query' => [
                    'ID' => $id,
                ]
            ]
        ))->execute();

        $data = $this->parseResponse($response);

        return $data['result'];
    }

    public function search(array $fields = [], $page = 0) : array {
        $response = (new BitrixRestRequestHelper(
            $this->credentials,

            $this->getBitrixMethodName('list'),
            [
                'method' => 'GET',
                'query' => [
                    'start' => $page,
                    'FILTER' => $fields,
                    'SELECT' => [
                        'ID'
                    ]
                ]
            ]
        ))->execute();

        $data = $this->parseResponse($response);
        $items = array_column($data['result'], 'ID');

        if (isset($data['next'])) {
            $items = array_merge($items, $this->search((int)$data['next']));
        }

        return array_map(
            function ($i) {
                return (int)$i;
            },
            $items
        );
    }
}