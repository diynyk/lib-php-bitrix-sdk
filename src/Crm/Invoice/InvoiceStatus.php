<?php

namespace Diynyk\Bitrix\InvoiceStatus;

use Diynyk\Bitrix\Crm\CrmClientAbstract;
use Diynyk\Bitrix\Crm\CrmClientInterface;
use Diynyk\Bitrix\Crm\Entities\InvoiceStatusEntity;

/**
 * Class InvoiceStatus
 * @package Diynyk\Bitrix
 */
class InvoiceStatus extends CrmClientAbstract implements CrmClientInterface
{
    const ENTITY_CLASS = InvoiceStatusEntity::class;
}