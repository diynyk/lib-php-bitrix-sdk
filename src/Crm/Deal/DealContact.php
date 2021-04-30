<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\DealContactEntity;

/**
 * Class DealContact
 * @package Diynyk\Bitrix
 */
class DealContact extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = DealContactEntity::class;
}