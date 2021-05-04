<?php

namespace Diynyk\Bitrix\Crm\ProductProperty;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ProductPropertyEntity;

/**
 * Class ProductProperty
 * @package Diynyk\Bitrix
 */
class ProductProperty extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ProductPropertyEntity::class;
}