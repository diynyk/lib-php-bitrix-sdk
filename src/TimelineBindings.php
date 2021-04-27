<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\TimelineBindingsEntity;

/**
 * Class TimelineBindings
 * @package Diynyk\Bitrix
 */
class TimelineBindings extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = TimelineBindingsEntity::class;
}