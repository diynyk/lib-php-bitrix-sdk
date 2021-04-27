<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\LiveFeedMessageEntity;

/**
 * Class LiveFeedMessage
 * @package Diynyk\Bitrix
 */
class LiveFeedMessage extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = LiveFeedMessageEntity::class;
}