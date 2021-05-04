<?php

namespace Diynyk\Bitrix\Crm\Catalog;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\CrmEntities\CatalogEntity;

/**
 * Class Catalog
 * @package Diynyk\Bitrix
 */
class Catalog extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = CatalogEntity::class;
}