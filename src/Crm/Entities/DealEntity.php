<?php

namespace Diynyk\Bitrix\Entities;

/**
 * Class DealEntity
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
class DealEntity extends EntityAbstract
{
    const ENTITY_NAME = 'deal';

    protected static $fieldDefinitionCache;

    protected function validate(string $name, mixed $value): bool
    {
        // TODO: Add validation
        return true;
    }
}