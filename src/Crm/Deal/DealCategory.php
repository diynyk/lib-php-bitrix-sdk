<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\DealCategoryEntity;

/**
 * Class DealCategory
 * @package Diynyk\Bitrix
 */
class DealCategory extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = DealCategoryEntity::class;
}