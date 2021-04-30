<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\DealUserfieldEntity;

/**
 * Class DealUserfield
 * @package Diynyk\Bitrix
 */
class DealUserfield extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = DealUserfieldEntity::class;
}