<?php

namespace Diynyk\Bitrix\Crm\Currency;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\CurrencyEntity;

/**
 * Class Currency
 * @package Diynyk\Bitrix
 */
class Currency extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = CurrencyEntity::class;
}