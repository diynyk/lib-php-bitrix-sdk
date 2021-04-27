<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\ProductrowEntity;

/**
 * Class Productrow
 * @package Diynyk\Bitrix
 */
class Productrow extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = ProductrowEntity::class;
}