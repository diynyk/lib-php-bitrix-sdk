<?php

namespace Diynyk\Bitrix\Crm\LiveFeedMessage;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\LiveFeedMessageEntity;

/**
 * Class LiveFeedMessage
 * @package Diynyk\Bitrix
 */
class LiveFeedMessage extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = LiveFeedMessageEntity::class;
}