<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\AddressEntity;

/**
 * Class Address
 * @package Diynyk\Bitrix
 */
class Address extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = AddressEntity::class;
}