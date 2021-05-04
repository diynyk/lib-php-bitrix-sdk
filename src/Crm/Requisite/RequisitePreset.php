<?php

namespace Diynyk\Bitrix\Crm\RequisitePreset;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\RequisitePresetEntity;

/**
 * Class RequisitePreset
 * @package Diynyk\Bitrix
 */
class RequisitePreset extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = RequisitePresetEntity::class;
}