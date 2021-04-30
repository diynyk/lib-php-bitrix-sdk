<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\DealEntity;

/**
 * Class Deal
 * @package Diynyk\Bitrix
 */
class Deal extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = DealEntity::class;
}