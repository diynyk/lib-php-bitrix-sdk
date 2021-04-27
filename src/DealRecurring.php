<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\DealRecurringEntity;

/**
 * Class DealRecurring
 * @package Diynyk\Bitrix
 */
class DealRecurring extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = DealRecurringEntity::class;
}