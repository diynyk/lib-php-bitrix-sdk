<?php

namespace Diynyk\Bitrix;

use Diynyk\Bitrix\Entities\InvoiceRecurringEntity;

/**
 * Class InvoiceRecurring
 * @package Diynyk\Bitrix
 */
class InvoiceRecurring extends ClientAbstract implements ClientInterface
{
    const ENTITY_CLASS = InvoiceRecurringEntity::class;
}