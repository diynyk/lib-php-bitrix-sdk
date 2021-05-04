<?php

namespace Diynyk\Bitrix\Crm\DealCategory;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DealCategoryEntity;

/**
 * Class DealCategory
 * @package Diynyk\Bitrix
 */
class DealCategory extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DealCategoryEntity::class;
}