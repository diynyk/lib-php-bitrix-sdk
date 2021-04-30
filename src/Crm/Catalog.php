<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\CatalogEntity;

/**
 * Class Catalog
 * @package Diynyk\Bitrix
 */
class Catalog extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = CatalogEntity::class;
}