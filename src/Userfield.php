<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\UserfieldEntity;

/**
 * Class Userfield
 * @package Diynyk\Bitrix
 */
class Userfield extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = UserfieldEntity::class;
}