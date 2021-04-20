<?php

namespace Diynyk\Bitrix\Entities;

use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

/**
 * Class LeadEntity
 * @package Diynyk\Bitrix\Entities
 * @property string ADDRESS
 * @property string ADDRESS_2
 */
class LeadEntity extends EntityAbstract
{

    protected static $fieldsDefitition = [];

    protected static $fieldDefinitionCache;

    protected static function readDynamicFieldDefinitionCached(BitrixConnectionCredentials $credentials)
    {
        if (empty(static::$fieldDefinitionCache)) {
            $helper = new BitrixRestRequestHelper($credentials, 'crm.lead.fields', [
                'method' => 'GET',
            ]);
            $data = $helper->execute();
            $parsed = json_decode($data, true);
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

    public function __construct(BitrixConnectionCredentials $credentials, array $state = [])
    {
        foreach (static::readDynamicFieldDefinitionCached($credentials) as $fieldKey => $fieldDefinition) {
            static::$fieldsDefitition[$fieldKey] = $fieldDefinition;
        }

        parent::__construct($state);
    }


    protected function validate(string $name, mixed $value): bool
    {
        // TODO: Add validation
        return true;
    }
}