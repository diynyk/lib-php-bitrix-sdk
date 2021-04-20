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
 * @property string ADDRESS_POSTAL_CODE
 * @property string ADDRESS_PROVINCE
 * @property string ADDRESS_REGION
 * @property user ASSIGNED_BY_ID
 * @property date BIRTHDATE
 * @property string COMMENTS
 * @property crm_company COMPANY_ID
 * @property crm_company COMPANY_TITLE
 * @property crm_contact CONTACT_ID
 * @property user CREATED_BY_ID
 * @property string DATE_CREATE
 * @property string DATE_MODIFY
 * @property crm_multifield EMAIL
 * @property char HAS_EMAIL
 * @property char HAS_PHONE
 * @property crm_status HONORIFIC
 * @property integer ID
 * @property crm_multifield IM	
 * @property char IS_RETURN_CUSTOMER
 * @property user MODIFY_BY_ID
 * @property string NAME
 * @property char OPENED
 * @property string ORIGINATOR_ID
 * @property string ORIGIN_ID
 * @property string ORIGIN_VERSION
 * @property crm_multifield PHONE
 * @property string POST
 * @property string SECOND_NAME
 * @property string SOURCE_DESCRIPTION
 * @property string SOURCE_ID
 * @property string STATUS_DESCRIPTION
 * @property string STATUS_ID
 * @property string STATUS_SEMANTIC_ID
 * @property string TITLE
 * @property string UTM_CAMPAIGN
 * @property string UTM_CONTENT
 * @property string UTM_MEDIUM
 * @property string UTM_SOURCE
 * @property string UTM_TERM
 * @property crm_multifield WEB
 */
class LeadEntity extends EntityAbstract
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