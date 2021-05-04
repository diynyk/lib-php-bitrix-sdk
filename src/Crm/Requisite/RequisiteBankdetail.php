<?php

namespace Diynyk\Bitrix\Crm\RequisiteBankdetail;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\RequisiteBankdetailEntity;

/**
 * Class RequisiteBankdetail
 * @package Diynyk\Bitrix
 */
class RequisiteBankdetail extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = RequisiteBankdetailEntity::class;
}