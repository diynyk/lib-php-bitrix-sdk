<?php

namespace Diynyk\Bitrix\Crm\Invoice;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\InvoiceEntity;

/**
 * Class Invoice
 * @package Diynyk\Bitrix
 */
class Invoice extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = InvoiceEntity::class;
}