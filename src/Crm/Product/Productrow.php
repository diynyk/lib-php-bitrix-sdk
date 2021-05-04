<?php

namespace Diynyk\Bitrix\Crm\Productrow;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\ProductrowEntity;

/**
 * Class Productrow
 * @package Diynyk\Bitrix
 */
class Productrow extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = ProductrowEntity::class;
}