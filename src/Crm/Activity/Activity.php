<?php

namespace Diynyk\Bitrix\Crm\Activity;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ActivityEntity;

/**
 * Class Activity
 * @package Diynyk\Bitrix
 */
class Activity extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ActivityEntity::class;
}