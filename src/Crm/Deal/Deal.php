<?php

namespace Diynyk\Bitrix\Crm\Deal;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DealEntity;

/**
 * Class Deal
 * @package Diynyk\Bitrix
 */
class Deal extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DealEntity::class;
}