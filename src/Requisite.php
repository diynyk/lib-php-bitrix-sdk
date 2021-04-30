<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\RequisiteEntity;

/**
 * Class Requisite
 * @package Diynyk\Bitrix
 */
class Requisite extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = RequisiteEntity::class;
}