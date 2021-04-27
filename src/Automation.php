<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\AutomationEntity;

/**
 * Class Automation
 * @package Diynyk\Bitrix
 */
class Automation extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = AutomationEntity::class;
}