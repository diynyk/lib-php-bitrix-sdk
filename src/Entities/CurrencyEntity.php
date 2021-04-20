<?php

namespace Diynyk\Bitrix\Entities;

use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

/**
 * Class LeadEntity
 * @package Diynyk\Bitrix\Entities
 * @property double AMOUNT
 * @property int AMOUNT_CNT
 * @property string CURRENCY
 * @property string DATA_UPDATE
 * @property int DECIMALS
 * @property string DEC_POINT
 * @property string FORMAT_STRING
 * @property string FULL_NAME
 * @property currency_localization LANG
 * @property string LID
 * @property int SORT
 * @property string THOUSANDS_SEP
 */
class CurrencyEntity extends EntityAbstract
{

    protected static $fieldsDefitition = [];

    protected static $fieldDefinitionCache;

    public function __construct(BitrixConnectionCredentials $credentials, array $state = [])
    {
        foreach (static::readDynamicFieldDefinitionCached($credentials) as $fieldKey => $fieldDefinition) {
            static::$fieldsDefitition[$fieldKey] = $fieldDefinition;
        }

        parent::__construct($state);
    }

    protected static function readDynamicFieldDefinitionCached(BitrixConnectionCredentials $credentials)
    {
        if (empty(static::$fieldDefinitionCache)) {
            $helper = new BitrixRestRequestHelper(
                $credentials, 'crm.lead.fields', [
                'method' => 'GET',
            ]
            );
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

    protected function validate(string $name, mixed $value): bool
    {
        // TODO: Add validation
        return true;
    }
}