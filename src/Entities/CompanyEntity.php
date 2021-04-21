<?php

namespace Diynyk\Bitrix\Entities;

use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

/**
 * Class LeadEntity
 * @package Diynyk\Bitrix\Entities
 * @property string ADDRESS
 * @property string ADDRESS_2
 * @property string ADDRESS_CITY
 * @property string ADDRESS_COUNTRY
 * @property string ADDRESS_COUNTRY_CODE
 * @property string ADDRESS_LEGAL
 * @property string ADDRESS_POSTAL_CODE
 * @property string ADDRESS_PROVINCE
 * @property string ADDRESS_REGION
 * @property user ASSIGNED_BY_ID
 * @property string BANKING_DETAILS
 * @property string COMMENTS
 * @property crm_status COMPANY_TYPE
 * @property user CREATED_BY_ID
 * @property crm_currency CURRENCY_ID
 * @property string DATE_CREATE
 * @property string DATE_MODIFY
 * @property crm_multifield EMAIL
 * @property crm_status EMPLOYESS
 * @property char HAS_EMAIL
 * @property char HAS_PHONE
 * @property integer ID
 * @property crm_multifield IM	
 * @property crm_status INDUSTRY
 * @property char IS_MY_COMPANY
 * @property crm_lead LEAD_ID
 * @property file LOGO
 * @property user MODIFY_BY_ID
 * @property char OPENED
 * @property string ORIGINATOR_ID
 * @property string ORIGIN_ID
 * @property string ORIGIN_VERSION
 * @property crm_multifield PHONE
 * @property string REG_ADDRESS
 * @property string REG_ADDRESS_2
 * @property string REG_ADDRESS_CITY
 * @property string REG_ADDRESS_COUNTRY
 * @property string REG_ADDRESS_COUNTRY_CODE	
 * @property string REG_ADDRESS_LEGAL
 * @property string REG_ADDRESS_POSTAL_CODE
 * @property string REG_ADDRESS_PROVINCE
 * @property string REG_ADDRESS_REGION
 * @property double REVENUE
 * @property string TITLE
 * @property string UTM_CAMPAIGN
 * @property string UTM_CONTENT
 * @property string UTM_MEDIUM
 * @property string UTM_SOURCE
 * @property string UTM_TERM
 * @property crm_multifield WEB
 */
class CompanyEntity extends EntityAbstract
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