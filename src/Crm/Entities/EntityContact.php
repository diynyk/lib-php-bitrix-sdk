<?php


namespace Diynyk\Bitrix\Crm\Entities;

use JetBrains\PhpStorm\Pure;

/**
 * Class EntityContact
 *
 * @property int ID
 * @property string VALUE_TYPE
 * @property string VALUE
 * @property string TYPE_ID
 *
 * @package Diynyk\Bitrix\Entities
 */
class EntityContact
{
    private $objFields = [
        'ID',
        'VALUE_TYPE',
        'VALUE',
        'TYPE_ID',
    ];

    private array $fields = [];

    public function __construct(array $state = [])
    {
        foreach ($this->objFields as $fieldName) {
            $this->$fieldName = $state[$fieldName] ?? null;
        }
    }

    public function toArray()
    {
        return $this->fields;
    }

    #[Pure] public function __get($name)
    {
        if ($this->validateProperty($name)) {
            return $this->fields[$name];
        }
    }


    public function __set(string $name, int|string $value)
    {
        if ($this->validateProperty($name)) {
            $this->fields[$name] = $value;
        }
    }


    /**
     * @param string $name
     * @return bool
     */
    public function validateProperty(string $name): bool
    {
        return in_array($name, $this->objFields, true);
    }
}