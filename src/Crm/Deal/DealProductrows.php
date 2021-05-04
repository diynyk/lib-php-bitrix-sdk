<?php

namespace Diynyk\BitrixCrm\DealProductrows;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Entities\DealProductrowsEntity;

/**
 * Class DealProductrows
 * @package Diynyk\Bitrix
 */
class DealProductrows extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = DealProductrowsEntity::class;
}