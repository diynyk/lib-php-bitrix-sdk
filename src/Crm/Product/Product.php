<?php

namespace Diynyk\Bitrix\Crm\Product;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ProductEntity;

/**
 * Class Product
 * @package Diynyk\Bitrix
 */
class Product extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ProductEntity::class;
}