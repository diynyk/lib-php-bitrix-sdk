<?php

namespace Diynyk\Bitrix\Crm\OnCrmProduct;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Entities\OnCrmProductEntiy;

/**
 * Class OnCrmProduct
 * @package Diynyk\Bitrix
 */
class OnCrmProduct extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = OnCrmProductEntiy::class;
}