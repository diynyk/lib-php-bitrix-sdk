<?php

namespace Diynyk\Bitrix\Crm\Entities;

/**
 * Class LeadEntity
 * @package Diynyk\Bitrix\Entities
 * @property int ID
 * @property string ADDRESS
 * @property string ADDRESS_2
 * @property string ADDRESS_CITY
 * @property string ADDRESS_COUNTRY
 * @property string ADDRESS_COUNTRY_CODE
 * @property string ADDRESS_LEGAL
 * @property string ADDRESS_POSTAL_CODE
 * @property string ADDRESS_PROVINCE
 * @property string ADDRESS_REGION
 * @property int ASSIGNED_BY_ID
 * @property string BANKING_DETAILS
 * @property string COMMENTS
 * @property string COMPANY_TYPE
 * @property int CREATED_BY_ID
 * @property int CURRENCY_ID
 * @property string DATE_CREATE
 * @property string DATE_MODIFY
 * @property EntityContact EMAIL
 * @property crm_status EMPLOYESS
 * @property string HAS_EMAIL
 * @property string HAS_PHONE
 * @property crm_multifield IM
 * @property string INDUSTRY
 * @property string IS_MY_COMPANY
 * @property int LEAD_ID
 * @property file LOGO
 * @property int MODIFY_BY_ID
 * @property string OPENED
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
    const ENTITY_NAME = 'company';

    protected static $fieldDefinitionCache;

    protected function validate(string $name, mixed $value): bool
    {
        // TODO: Add validation
        return true;
    }
}