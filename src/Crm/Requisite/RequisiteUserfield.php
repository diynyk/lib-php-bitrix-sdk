<?php

namespace Diynyk\Bitrix\Crm\RequisiteUserfield;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\RequisiteUserfieldEntity;

/**
 * Class RequisiteUserfield
 * @package Diynyk\Bitrix
 */
class RequisiteUserfield extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = RequisiteUserfieldEntity::class;
}