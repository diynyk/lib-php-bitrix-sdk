<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\InvoiceStatusEntity;

/**
 * Class InvoiceStatus
 * @package Diynyk\Bitrix
 */
class InvoiceStatus extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = InvoiceStatusEntity::class;
}