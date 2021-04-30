<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ProductEntity;

/**
 * Class Product
 * @package Diynyk\Bitrix
 */
class Product extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ProductEntity::class;
}