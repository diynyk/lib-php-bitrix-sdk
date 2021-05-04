<?php

namespace Diynyk\BitrixCrm\Timeline;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\TimelineBindingsEntity;

/**
 * Class TimelineBindings
 * @package Diynyk\Bitrix
 */
class TimelineBindings extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = TimelineBindingsEntity::class;
}