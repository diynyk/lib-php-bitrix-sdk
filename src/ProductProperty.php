<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ProductPropertyEntity;

/**
 * Class ProductProperty
 * @package Diynyk\Bitrix
 */
class ProductProperty extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ProductPropertyEntity::class;
}