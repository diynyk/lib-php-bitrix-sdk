<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ExternalChannelEntity;

/**
 * Class ExternalChannel
 * @package Diynyk\Bitrix
 */
class ExternalChannel extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ExternalChannelEntity::class;
}