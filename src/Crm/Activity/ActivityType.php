<?php

namespace Diynyk\Bitrix\Crm\ActivityType;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ActivityTypeEntity;

/**
 * Class ActivityType
 * @package Diynyk\Bitrix
 */
class ActivityType extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ActivityTypeEntity::class;
}