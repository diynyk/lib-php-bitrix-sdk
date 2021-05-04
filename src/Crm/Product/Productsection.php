<?php

namespace Diynyk\Bitrix\Crm\Productsection;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ProductsectionEntity;

/**
 * Class Productsection
 * @package Diynyk\Bitrix
 */
class Productsection extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ProductsectionEntity::class;
}