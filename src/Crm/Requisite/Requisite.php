<?php

namespace Diynyk\Bitrix\Crm\Requisite;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\RequisiteEntity;

/**
 * Class Requisite
 * @package Diynyk\Bitrix
 */
class Requisite extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = RequisiteEntity::class;
}