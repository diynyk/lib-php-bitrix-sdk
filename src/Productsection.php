<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ProductsectionEntity;

/**
 * Class Productsection
 * @package Diynyk\Bitrix
 */
class Productsection extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ProductsectionEntity::class;
}