<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\CurrencyEntity;

/**
 * Class Currency
 * @package Diynyk\Bitrix
 */
class Currency extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = CurrencyEntity::class;
}