<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ActivityEntity;

/**
 * Class Activity
 * @package Diynyk\Bitrix
 */
class Activity extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ActivityEntity::class;
}