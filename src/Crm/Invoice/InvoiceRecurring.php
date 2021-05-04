<?php

namespace Diynyk\Bitrix\Crm\InvoiceRecurring;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\InvoiceRecurringEntity;

/**
 * Class InvoiceRecurring
 * @package Diynyk\Bitrix
 */
class InvoiceRecurring extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = InvoiceRecurringEntity::class;
}