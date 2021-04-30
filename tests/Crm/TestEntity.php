<?php


namespace Diynyk\Bitrix\Test\Crm;


use Diynyk\Bitrix\Crm\Entities\EntityAbstract;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;

class TestEntity extends EntityAbstract
{

    /**
     * EntityAbstract constructor.
     * @param BitrixConnectionCredentials $credentials
     * @param array $state
     */
    public function __construct(BitrixConnectionCredentials $credentials, array $state = [])
    {
        $this->fields = $state;
    }

    protected function validate(string $name, mixed $value): bool
    {
        return true;
    }

    public function validateProperty($name): bool
    {
        return true;
    }
}