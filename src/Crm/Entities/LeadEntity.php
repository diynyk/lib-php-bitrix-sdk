<?php

namespace Diynyk\Bitrix\Entities;

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
 * @property int COMPANY_ID
 * @property string COMPANY_TITLE
 * @property int CONTACT_ID
 * @property int CREATED_BY_ID
 * @property string DATE_CREATE
 * @property string DATE_MODIFY
 * @property EntityContact[] EMAIL
 * @property string HAS_EMAIL
 * @property string HAS_PHONE
 * @property string HONORIFIC
 * @property integer ID
 * @property crm_multifield IM
 * @property char IS_RETURN_CUSTOMER
 * @property user MODIFY_BY_ID
 * @property string NAME
 * @property char OPENED
 * @property string ORIGINATOR_ID
 * @property string ORIGIN_ID
 * @property string ORIGIN_VERSION
 * @property EntityContact[] PHONE
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
    const ENTITY_NAME = 'lead';

    protected static $fieldDefinitionCache;

    protected function validate(string $name, mixed $value): bool
    {
        // TODO: Add validation
        return true;
    }

    protected function pack($field): mixed
    {
        return match ($field) {
            'PHONE', 'EMAIL' => array_map(
                function ($e) {
                    return $e->toArray();
                },
                $this->{$field}
            ),
            default => parent::pack($field),
        };
    }

    protected function unpack($field): mixed
    {

        return match ($field) {
            'PHONE', 'EMAIL' => is_array($this->$field) ? array_map(
                function ($e) {
                    return new EntityContact($e);
                },
                $this->$field
            ) : [],
            default => parent::unpack($field),
        };
    }
}