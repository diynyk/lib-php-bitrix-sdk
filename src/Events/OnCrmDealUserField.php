<?php

namespace Diynyk\Bitrix\Crm\OnCrmDealUserfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Entities\OnCrmDealUserFieldEntiy;

/**
 * Class OnCrmDealUserField
 * @package Diynyk\Bitrix
 */
class OnCrmDealUserField extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = OnCrmDealUserFieldEntiy::class;
}