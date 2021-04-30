<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\RequisitePresetEntity;

/**
 * Class RequisitePreset
 * @package Diynyk\Bitrix
 */
class RequisitePreset extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = RequisitePresetEntity::class;
}