<?php

namespace Diynyk\Bitrix\Crm\DealRecurring;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DealRecurringEntity;

/**
 * Class DealRecurring
 * @package Diynyk\Bitrix
 */
class DealRecurring extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DealRecurringEntity::class;
}