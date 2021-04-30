<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\VatEntity;

/**
 * Class Vat
 * @package Diynyk\Bitrix
 */
class Vat extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = VatEntity::class;
}