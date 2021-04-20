<?php


namespace Diynyk\Bitrix;


use Diynyk\Bitrix\Entities\CompanyEntity;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

class Company
{
    private $credetials;

    public function __construct(BitrixConnectionCredentials $credetials)
    {
        $this->credetials = $credetials;
    }

    public function index($page = 0): array
    {
        $helper = new BitrixRestRequestHelper(
            $this->credetials, 'crm.company.list', [
                                 'method' => 'GET',
                                 'query' => [
                                     'select[]' => 'ID',
                                     'start' => $page
                                 ]
                             ]
        );
        $response = $helper->execute();

        $data = json_decode($response, true);
        $items = $this->parseResult($data);

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

    private function parseResult(array $result)
    {
        return array_column($result['result'], 'ID');
    }

    public function add(CompanyEntity $entity): CompanyEntity
    {
        $helper = new BitrixRestRequestHelper(
            $this->credetials, 'crm.company.add', [
                                 'method' => 'POST',
                                 'body' => [
                                     'fields' => $entity->toArray(),
                                 ]
                             ]
        );
        $response = $helper->execute();

        $data = json_decode($response, true);

        if (isset($data['result'])) {
            return $this->get($data['result']);
        }
        throw new \Exception('fuck');
    }

    public function get(int $id): CompanyEntity
    {
        $helper = new BitrixRestRequestHelper(
            $this->credetials, 'crm.company.get', [
                                 'method' => 'GET',
                                 'query' => [
                                     'ID' => $id,
                                 ]
                             ]
        );
        $response = $helper->execute();

        $data = json_decode($response, true);

        if (isset($data['result'])) {
            return new CompanyEntity($this->credetials, $data['result']);
        }
        throw new \Exception('fuck');
    }

    public function update(CompanyEntity $entity): CompanyEntity
    {
        $helper = new BitrixRestRequestHelper(
            $this->credetials, 'crm.company.update', [
                                 'method' => 'POST',
                                 'query' => [
                                     'ID' => $entity->ID,
                                 ],
                                 'body' => [
                                     'fields' => $entity->toArray(),
                                 ]
                             ]
        );
        $response = $helper->execute();

        $data = json_decode($response, true);

        if (isset($data['result']) && $data['result']) {
            return $this->get($entity->ID);
        }
        throw new \Exception('fuck');
    }

    public function delete(int $id): bool
    {
        $helper = new BitrixRestRequestHelper(
            $this->credetials, 'crm.currency.delete', [
                                 'method' => 'GET',
                                 'query' => [
                                     'ID' => $id,
                                 ]
                             ]
        );
        $response = $helper->execute();

        $data = json_decode($response, true);

        return $data['result'];
    }
}