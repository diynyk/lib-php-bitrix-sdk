<?php

namespace Diynyk\Bitrix\Entities;

use Diynyk\Bitrix\Exceptions\InvalidPropertyNameException;

abstract class EntityAbstract
{

    const FIELD_DESCRIPTION = 'name';
    const FIELD_DATA_TYPE = 'string';
    const FIELD_DEFAULT_VALUE = 'default';
    const FIELD_MANDATORY_FLAG = 'mandatory';
    const FIELD_READONLY_FLAG = 'readonly';
    const FIELD_ARRAY_FLAG = 'array';
    protected static $fieldsDefitition = [
        'SAMPLE_FIELD' => [
            self::FIELD_DESCRIPTION => 'This is a sample field',
            self::FIELD_DATA_TYPE => 'string',
            self::FIELD_DEFAULT_VALUE => '',
            self::FIELD_MANDATORY_FLAG => false,
            self::FIELD_READONLY_FLAG => false,
            self::FIELD_ARRAY_FLAG => false,
        ],
    ];
    private $fields = [];

    /**
     * EntityAbstract constructor.
     * @param array $state
     */
    public function __construct(array $state = [])
    {
        foreach (static::$fieldsDefitition as $fieldId => $fieldProps) {
            $this->fields[$fieldId] = !empty($state[$fieldId])
                ? $state[$fieldId]
                : $fieldProps[self::FIELD_DEFAULT_VALUE];
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
    public function validateProperty($name)
    {
        return !empty(static::$fieldsDefitition[$name]);
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
        return $this->fields;
    }
}
