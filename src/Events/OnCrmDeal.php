<?php

namespace Diynyk\Bitrix\Crm\OnCrmDeal;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\OnCrmDealEntiy;

/**
 * Class OnCrmDeal
 * @package Diynyk\Bitrix
 */
class OnCrmDeal extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = OnCrmDealEntiy::class;
}