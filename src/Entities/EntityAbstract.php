<?php

namespace Diynyk\Bitrix\Entities;

use Diynyk\Bitrix\Exceptions\InvalidPropertyNameException;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

abstract class EntityAbstract
{
    const ENTITY_NAME = '';

    /**
     * @var array
     */
    private array $fields;

    /**
     * @param string $action
     * @return string
     */
    public static function getBitrixMethodName(string $action): string
    {
        return vsprintf('crm.%s.%s', [static::ENTITY_NAME, $action]);
    }

    protected static function readDynamicFieldDefinitionCached(BitrixConnectionCredentials $credentials)
    {
        if (empty(static::$fieldDefinitionCache)) {
            $callName = static::getBitrixMethodName('fields');

            $response = (new BitrixRestRequestHelper(
                $credentials,
                $callName,
                [
                    'method' => 'GET',
                ]
            ))->execute();

            $parsed = json_decode($response, true);

            $result = $parsed['result'];
            $output = [];

            foreach ($result as $fieldId => $fieldDefinition) {
                $output[$fieldId] = self::getFieldDefinition(
                    $fieldDefinition['title'],
                    $fieldDefinition['type'],
                    '',
                    $fieldDefinition['isRequired'],
                    $fieldDefinition['isReadOnly'],
                    false
                );
            }

            static::$fieldDefinitionCache = $output;
        }

        return static::$fieldDefinitionCache;
    }

    const FIELD_DESCRIPTION = 'name';
    const FIELD_DATA_TYPE = 'string';
    const FIELD_DEFAULT_VALUE = 'default';
    const FIELD_MANDATORY_FLAG = 'mandatory';
    const FIELD_READONLY_FLAG = 'readonly';
    const FIELD_ARRAY_FLAG = 'array';
    protected $fieldsDefitition = [
        'SAMPLE_FIELD' => [
            self::FIELD_DESCRIPTION => 'This is a sample field',
            self::FIELD_DATA_TYPE => 'string',
            self::FIELD_DEFAULT_VALUE => '',
            self::FIELD_MANDATORY_FLAG => false,
            self::FIELD_READONLY_FLAG => false,
            self::FIELD_ARRAY_FLAG => false,
        ],
    ];

    /**
     * EntityAbstract constructor.
     * @param BitrixConnectionCredentials $credentials
     * @param array $state
     */
    public function __construct(BitrixConnectionCredentials $credentials, array $state = [])
    {
        $this->fieldsDefitition = [];
        foreach (static::readDynamicFieldDefinitionCached($credentials) as $fieldKey => $fieldDefinition) {
            $this->fieldsDefitition[$fieldKey] = $fieldDefinition;
        }

        foreach ($this->fieldsDefitition as $fieldId => $fieldProps) {
            $this->fields[$fieldId] = !empty($state[$fieldId])
                ? $state[$fieldId]
                : $fieldProps[self::FIELD_DEFAULT_VALUE];
        }

        foreach ($this->fields as $fieldId => & $fieldValue) {
            $fieldValue = $this->unpack($fieldId);
        }
    }

    protected static function getFieldDefinition(
        $description = 'Sample description',
        $type = 'string',
        $default = '',
        $mandatory = false,
        $readonly = false,
        $array = false
    ) {
        return [
            self::FIELD_DESCRIPTION => 'This is a sample field',
            self::FIELD_DATA_TYPE => 'string',
            self::FIELD_DEFAULT_VALUE => '',
            self::FIELD_MANDATORY_FLAG => false,
            self::FIELD_READONLY_FLAG => false,
            self::FIELD_ARRAY_FLAG => false,
        ];
    }

    /**
     * @param $name
     * @return mixed
     * @throws InvalidPropertyNameException
     */
    public function __get($name)
    {
        if ($this->validateProperty($name)) {
            return $this->fields[$name];
        } else {
            $this->badProperty($name);
        }
    }

    /**
     * @param $name
     * @param $value
     * @throws InvalidPropertyNameException
     */
    public function __set($name, $value)
    {
        if ($this->validateProperty($name) && $this->validate($name, $value)) {
            $this->fields[$name] = $value;
        } else {
            $this->badProperty($name);
        }
    }

    /**
     * Checks if property name is valid
     *
     * @param string $name
     * @return bool
     */
    public function validateProperty($name): bool
    {
        return !empty($this->fieldsDefitition[$name]);
    }

    /**
     * @param $name
     * @throws InvalidPropertyNameException
     */
    private function badProperty($name)
    {
        throw new InvalidPropertyNameException(
            vsprintf(
                'Invalid property %s',
                [
                    $name
                ]
            )
        );
    }

    protected abstract function validate(string $name, mixed $value): bool;

    public function toArray()
    {
        $output = [];
        foreach (array_keys($this->fields) as $fieldName) {
            $output[$fieldName] = $this->pack($fieldName);
        }
        return $output;
    }

    protected function unpack($field): mixed
    {
        return $this->{$field};
    }

    protected function pack($field): mixed
    {
        return $this->{$field};
    }

}
