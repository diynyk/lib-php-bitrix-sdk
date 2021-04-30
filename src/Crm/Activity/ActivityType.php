<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ActivityTypeEntity;

/**
 * Class ActivityType
 * @package Diynyk\Bitrix
 */
class ActivityType extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ActivityTypeEntity::class;
}