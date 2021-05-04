<?php

namespace Diynyk\Bitrix\Crm\DealUerfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\DealUserfieldEntity;

/**
 * Class DealUserfield
 * @package Diynyk\Bitrix
 */
class DealUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DealUserfieldEntity::class;
}