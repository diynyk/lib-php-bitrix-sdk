<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\InvoiceEntity;

/**
 * Class Invoice
 * @package Diynyk\Bitrix
 */
class Invoice extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = InvoiceEntity::class;
}